<?php

// $host = '127.0.0.1';
// $db   = 'flowerpower';
// $user = 'root';
// $pass = '';
// $charset = 'utf8mb4';

class database{
  private $servername;
  private $dbname;
  private $username;
  private $password;
  private $charset;

  public function connect() {
    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbname = "flowerpower";
    $this->charset = "utf8mb4";

    try{
      $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
      $pdo = new PDO($dsn, $this->username, $this->password);
      $pdo->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch(PDOException $e){
      echo "Connection failed: ".$e->getMessage();
    }
  }
}
?>
