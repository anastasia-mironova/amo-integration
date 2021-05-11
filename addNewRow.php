<?php

require_once( "db.php" );

$conn = new mySQLConnection();

$conn->addNewRow('leads');
$conn->addNewRow('sales');
$conn->addNewRow('income');
$conn->closeConn();