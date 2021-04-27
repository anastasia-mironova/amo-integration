<?php
require_once("db.php");
require_once("filterFields.php");
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
        
        $conn = new mySQLConnection();

        if (isset($lead['add'][0]['custom_fields'])) {
            $field = countValue($lead['add'][0]['custom_fields']);
        } else {
            $field = countValue(null);
        }
        writeJSONLogFile($lead['add'][0]['id'], 'add', $field[0]);

        $conn->updateRow($field[0], $conn->getOneValue($field[0], null)[$field[0]] + 1);
        $conn->updateTotalAmount();
        $conn->closeConn();
    }
    if (isset($lead['restore'])) {
        
        $conn = new mySQLConnection();

        if (isset($lead['restore'][0]['custom_fields'])) {
            $field = countValue($lead['restore'][0]['custom_fields']);
        } else {
            $field = countValue(null);
        }
        writeJSONLogFile($lead['restore'][0]['id'], 'restore', $field[0]);

        $conn->updateRow($field[0], $conn->getOneValue($field[0], null)[$field[0]] + 1);
        $conn->updateTotalAmount();
        $conn->closeConn();
    }
    if (isset($lead['delete'])) {
        $conn = new mySQLConnection();
        $field = columnOfDeletedFields($lead['delete'][0]['id']);
       print_r($field);
        $count = $conn->getOneValue($field['column'], null)[$field['column']];
        $conn->updateRow($field['column'], $count-1);
        $conn->updateTotalAmount();
        $conn->closeConn();
        writeJSONLogFile($lead['delete'][0]['id'], 'delete', $field['column']);
    }
    if (isset($lead['update'])) {
        writeJSONLogFile($lead['update'][0]['id'], 'update', null);
    }
}
