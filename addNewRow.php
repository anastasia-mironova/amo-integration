<?php

require_once( "db.php" );

$conn = new mySQLConnection();

$conn->addNewRow();
$conn->closeConn();