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

  public function addNewRow()
  {
    $today = date("Y-m-d H:i:s");
    $month = date("F", strtotime($today));
    $sql = "INSERT INTO `leads`(`date`, `month`) VALUES ('$today', '$month')";
    if (mysqli_query($this->conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
    }
  }
  public function updateRow($column, $value)
  {
    $today = date("Y-m-d");
    $sql = "UPDATE `leads` SET `$column`= {$value} WHERE `date`='$today'";
    if (mysqli_query($this->conn, $sql)) {
      echo "record updated successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
    }
  }
  public function getRow()
  {
    $today = date("Y-m-d");
    $sql = "select * FROM `leads` WHERE `date`='$today'";
    $result =  $this->conn->query($sql)->fetch_assoc();

    //print_r($result);
    if (mysqli_query($this->conn, $sql)) {
      echo "record updated successfully";
      return $result;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
    }
  }
  public function getOneValue($column, $date)
  {
    if (!isset($date)) {
      $date = date("Y-m-d");

    }else{
      $date =  date("F", strtotime($date));
    }
    $sql = "select `$column` FROM `leads` WHERE `date`='$date'";


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
  public function updateTotalAmount()
  {
    $currentRowValues = $this->getRow();
    $slicedArrayRowValues = array_slice($currentRowValues, 2, count($currentRowValues) - 3);
    //print_r($slicedArrayRowValues);
    $leadCount = array_sum($slicedArrayRowValues);
    $this->updateRow('total_amount', $leadCount);
  }
}
