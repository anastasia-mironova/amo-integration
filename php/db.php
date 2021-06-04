<?php
/*
  Класс, реализующий подключение к базе данных MySql и операции с данными
*/
class mySQLConnection
{
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "amocrm_handler_server";
  private $conn;

  public function __construct()
  {
    /*
      Создание подключенния к БД
    */
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }
    echo "Connected successfully";

    return $this->conn;
  }
  /*
  Закрытие подключения
  */
  public function closeConn()
  {
    $this->conn->close();
  }
  /*
    @param string $table имя таблицы, для которой используется запрос
    функция создает новую строку в таблице с текущими датой и месяцем
  */
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
  /*
    @param string $column  имя колонки, в которой обновляется значение
    @param int $value новое значение ячейки
    @param  string $table имя таблицы, для которой используется запрос
    функция, обновляющая значение в ячейке
  */
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
  /*
    @param string $table имя таблицы, для которой выполняется запрос
    @return object $result объект, содержащий значения строки из базы данных с текущей датой
    функция, возвращающая объект со значениями строки с текущей датой из бд
  */
  public function getRow(string $table)
  {
    $today = date("Y-m-d");
    $sql = "select * FROM `$table` WHERE `date`='$today'";
    $result =  $this->conn->query($sql)->fetch_assoc();
    if (mysqli_query($this->conn, $sql)) {
      echo "record updated successfully";
      return $result;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
    }
  }
  /*
    @param string $column  имя колонки, в которой обновляется значение
    @param string $date | null дата
    @param  string $table имя таблицы, для которой используется запрос
    @return object $result объект, содержащий значение ячеки заданной колонки  из строки с заданной датой, если дата не задана, то берется текущая
    функция получения значения ячейки 
  */
  public function getOneValue(string $column, ?string $date, string $table)
  {
    if (!isset($date)) {
      $date = date("Y-m-d");
    } else {
      $date =  date("F", strtotime($date));
    }
    $sql = "select `$column` FROM `$table` WHERE `date`='$date'";
    if (mysqli_query($this->conn, $sql)) {
      if (empty($result)) {
        echo "empty";
      }
      $result =  $this->conn->query($sql)->fetch_assoc();
      echo "record read successfully";
      return $result;
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
    }
  }
  /*
    @param string $table имя таблицы, для которой выполняется запрос
    обновлевние общего количества конверсий в строке 
  */
  public function updateTotalAmount(string $table)
  {
    $currentRowValues = $this->getRow($table);
    // исключение из массива значений столбцов значений даты, месяца и общего количества конверсий
    $slicedArrayRowValues = array_slice($currentRowValues, 2, count($currentRowValues) - 3);
    // суммирование значений 
    $leadCount = array_sum($slicedArrayRowValues);
    $this->updateRow('total_amount', $leadCount, $table);
  }
}
