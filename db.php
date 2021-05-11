<?php

class mySQLConnection
{
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "amocrm_handler_server";
  private $conn;


  public function __construct()
  {

    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
    echo "Connected successfully";
  
    return $this->conn;
  }
  public function closeConn()
  {

    $this->conn->close();
  }

  public function addNewRow(string $table)
  {
    $today = date("Y-m-d H:i:s");
    $month = date("F", strtotime($today));
    $sql = "INSERT INTO `$table`(`date`, `month`) VALUES ('$today', '$month')";
    if (mysqli_query($this->conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
    }
  }
  public function updateRow(string $column, int  $value, string $table)
  {
    $today = date("Y-m-d");
    $sql = "UPDATE `$table` SET `$column`= {$value} WHERE `date`='$today'";
    if (mysqli_query($this->conn, $sql)) {
      echo "record updated successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
    }
  }
  public function getRow(string $table)
  {
    $today = date("Y-m-d");
    $sql = "select * FROM `$table` WHERE `date`='$today'";
    $result =  $this->conn->query($sql)->fetch_assoc();

    //print_r($result);
    if (mysqli_query($this->conn, $sql)) {
      echo "record updated successfully";
      return $result;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
    }
  }
  public function getOneValue(string $column, ?string $date, string $table)
  {
    if (!isset($date)) {
      $date = date("Y-m-d");

    }else{
      $date =  date("F", strtotime($date));
    }
    $sql = "select `$column` FROM `$table` WHERE `date`='$date'";


    if (mysqli_query($this->conn, $sql)) {
      if(empty($result)){
        echo "empty";
      }
      $result =  $this->conn->query($sql)->fetch_assoc();
     // print_r($result);
    echo "record read successfully";
     
      return $result;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
    }
  }
  public function updateTotalAmount(string $table)
  {
    $currentRowValues = $this->getRow($table);
    $slicedArrayRowValues = array_slice($currentRowValues, 2, count($currentRowValues) - 3);
    $leadCount = array_sum($slicedArrayRowValues);
    $this->updateRow('total_amount', $leadCount,$table);
  }
}
