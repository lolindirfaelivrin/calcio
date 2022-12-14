<?php

class Database {

  private $dbHost = DB_HOST;
  private $dbUser = DB_USER;
  private $dbPass = DB_PASS;
  private $dbName = DB_NAME;

  private $statement;
  private $dbHandler;
  private $dberror;

  public function __construct() {
    $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
    $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    try {
        $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
    } catch (PDOException $e) {
        $this->error = $e->getMessage();
        echo $this->error;
    }
  }

  public function query($sql) {
    $this->statement = $this->dbHandler->prepare($sql);
  }

  public function bind($param, $value, $type = null) {
    switch (is_null($type)) {

      case is_int($value):
          $type = PDO::PARAM_INT;
        break;

      case is_bool($value):
          $type = PDO::PARAM_BOOL;
        break;

      case is_null($value):
          $type = PDO::PARAM_NULL;
        break;

      default:
        // code...
        $type = PDO::PARAM_STR;
    }

    $this->statement->bindValue($param, $value, $type);
  }

  public function executeQuery() {
    return $this->statement->execute();
  }

  public function resultSet() {
    $this->executeQuery();
    return $this->statement->fetchAll(PDO::FETCH_OBJ);
  }

  public function singleRow() {
    $this->executeQuery();
    return $this->statement->fetch(PDO::FETCH_OBJ);
  }

  public function rowCount() {
    return $this->statement->rowCount();
  }
  
    public function mostraErrore() {
    return $this->statement->errorInfo();
  }

  public function lastId() {
    return $this->dbHandler->lastInsertId();
  }
}


?>
