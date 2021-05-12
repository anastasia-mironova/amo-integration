<?php
require_once("db.php");
require_once("filterFields.php");
require_once("auth.php");
/*
     @param string $id
     @param string $type
     @param string $column
    функция записи новых сделок  в файл логов
*/
function writeJSONLogFile($id, $type, $column)
{  
    $file = 'log.json';
    // получения всего списка логов в массив
    $json = file_get_contents($file);
    $idArray = array();
    $jsonDecocded = json_decode($json, true);
    if (!empty($jsonDecocded)) {
        foreach ($jsonDecocded as $elem) {
            $idArray[] = $elem;
        }
    }
    //добавление новой записи ф файл логов
    $idArray[] = array('id' => $id, 'type' => $type, 'date' => date("Y-m-d H:i:s"), 'column' => $column);
    $result = json_encode($idArray, JSON_FORCE_OBJECT);
    $fp = fopen($file, 'w');
    fwrite($fp, $result);
    fclose($fp);
}



if (isset($_POST['leads'])) {
    /*
        обработка вебхука добавления
    */
    $lead = $_POST['leads'];
    if (isset($lead['add'])) {

        $conn = new mySQLConnection('leads');
    //если существуют пользовательски поля, то ищем необходдимые, если нет передаем null
        if (isset($lead['add'][0]['custom_fields'])) {
            $field = countValue($lead['add'][0]['custom_fields']);
        } else {
            $field = countValue(null);
        }
        writeJSONLogFile($lead['add'][0]['id'], 'add', $field[0]);
        //обновляем значение ячейки и общее количество конверсий
        $conn->updateRow($field[0], $conn->getOneValue($field[0], null, 'leads')[$field[0]] + 1,'leads');
        $conn->updateTotalAmount('leads');
        $conn->closeConn();
    }
    /*
         обработка вебхука восстановления
    */
    if (isset($lead['restore'])) {
        $conn = new mySQLConnection('leads');
        if (isset($lead['restore'][0]['custom_fields'])) {
            $field = countValue($lead['restore'][0]['custom_fields']);
        } else {
            $field = countValue(null);
        }
        writeJSONLogFile($lead['restore'][0]['id'], 'restore', $field[0]);
        $conn->updateRow($field[0], $conn->getOneValue($field[0], null,'leads')[$field[0]] + 1,'leads');
        $conn->updateTotalAmount('leads');
        $conn->closeConn();
    }
    /*
        обработка вебхука удаления 
    */
    if (isset($lead['delete'])) {
        $conn = new mySQLConnection('leads');
        $field = columnOfDeletedFields($lead['delete'][0]['id']);
        $count = $conn->getOneValue($field['column'], null,'leads')[$field['column']];
        $conn->updateRow($field['column'], $count - 1,'leads');
        $conn->updateTotalAmount('leads');
        $conn->closeConn();
        writeJSONLogFile($lead['delete'][0]['id'], 'delete', $field['column']);
    }
    /*
         обработка вебхука обновления, причем если заполнено поле дата оплаты, то учитываем событие, а если нет, не учитываем
   */
    if (isset($lead['update'])) {
        writeJSONLogFile($lead['update'][0]['id'], 'update', null);

        if (isset($lead['update'][0]['custom_fields'])) {
            $custom = $lead['update'][0]['custom_fields'];
            foreach ($custom as $element) {
                if ($element['id'] == 487303) {
                    $conn = new mySQLConnection('sales');
                    $field = countValue($custom);
                   
                
                    $conn = new mySQLConnection('income');
                    //авторизуемся в амо
                    $apiConnect = auth();
                    // тянем данные обновленной сделки
                    $leadUp = $apiConnect->leads()->getOne($lead['update'][0]['id']);
                    // увеличиваем продажи 
                    $conn->updateRow($field[0], $conn->getOneValue($field[0], null,'sales')[$field[0]] + 1,'sales');
                    $conn->updateTotalAmount('sales');
                    // увеличиваем доходы
                    $conn->updateRow($field[0], $conn->getOneValue($field[0], null, 'income')[$field[0]] + $leadUp->price, 'income');
                    $conn->updateTotalAmount('income');
                    $conn->closeConn();
                    writeJSONLogFile($lead['update'][0]['id'], 'update', $field[0]);
                }
            }
        } else {
            $field = countValue(null);
        }
    }
}
