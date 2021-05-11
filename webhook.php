<?php
require_once("db.php");
require_once("filterFields.php");
require_once("auth.php");
function writeJSONLogFile($value, $type, $column)
{
    $file = 'log.json';
    $json = file_get_contents($file);
    $idArray = array();
    $jsonDecocded = json_decode($json, true);
    if (!empty($jsonDecocded)) {
        foreach ($jsonDecocded as $elem) {
            $idArray[] = $elem;
        }
    }
    $idArray[] = array('id' => $value, 'type' => $type, 'date' => date("Y-m-d H:i:s"), 'column' => $column);
    $result = json_encode($idArray, JSON_FORCE_OBJECT);
    $fp = fopen($file, 'w');
    fwrite($fp, $result);
    fclose($fp);
}


// Check connection

if (isset($_POST['leads'])) {
    $lead = $_POST['leads'];
    if (isset($lead['add'])) {

        $conn = new mySQLConnection('leads');

        if (isset($lead['add'][0]['custom_fields'])) {
            $field = countValue($lead['add'][0]['custom_fields']);
        } else {
            $field = countValue(null);
        }
        writeJSONLogFile($lead['add'][0]['id'], 'add', $field[0]);

        $conn->updateRow($field[0], $conn->getOneValue($field[0], null, 'leads')[$field[0]] + 1,'leads');
        $conn->updateTotalAmount('leads');
        $conn->closeConn();
    }
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
    if (isset($lead['delete'])) {
        $conn = new mySQLConnection('leads');
        $field = columnOfDeletedFields($lead['delete'][0]['id']);
        print_r($field);
        $count = $conn->getOneValue($field['column'], null,'leads')[$field['column']];
        $conn->updateRow($field['column'], $count - 1,'leads');
        $conn->updateTotalAmount('leads');
        $conn->closeConn();
        writeJSONLogFile($lead['delete'][0]['id'], 'delete', $field['column']);
    }
    if (isset($lead['update'])) {
        writeJSONLogFile($lead['update'][0]['id'], 'update', null);

        if (isset($lead['update'][0]['custom_fields'])) {
            $custom = $lead['update'][0]['custom_fields'];
            foreach ($custom as $element) {
                if ($element['id'] == 487303) {
                    $conn = new mySQLConnection('sales');
                    $field = countValue($custom);
                   
                
                    $conn = new mySQLConnection('income');
                    $apiConnect = auth();
                    $leadUp = $apiConnect->leads()->getOne($lead['update'][0]['id']);

                    $conn->updateRow($field[0], $conn->getOneValue($field[0], null,'sales')[$field[0]] + 1,'sales');
                    $conn->updateTotalAmount('sales');

                    $conn->updateRow($field[0], $conn->getOneValue($field[0], null, 'income')[$field[0]] + $leadUp->price, 'income');
                    $conn->updateTotalAmount('income');
                    print_r($leadUp->price);
                    $conn->closeConn();
                    writeJSONLogFile($lead['update'][0]['id'], 'update', $field[0]);
                }
            }
        } else {
            $field = countValue(null);
        }
    }
}
