<?php
//pdo database connectie voor de edit en delete
class database{
  private $host;
  private $username;
  private $password;
  private $conn;
  private $database;
  

  public function __construct(){
    $this->host='localhost';
    $this->username='root';
    $this->password='';
    $this->database='ter duin';

    try {
      $dsn ="mysql:host=$this->host;dbname=$this->database";
      $this->conn = new PDO($dsn, $this->username, $this->password);

    } catch (PDOException $e) {
      die("Unable to connect. Error: " . $e.getMessage());

    }

  }
//pdo select statement
  public function select($statement, $named_placeholder){
    $statement = $this->conn->prepare($statement);
    $statement->execute($named_placeholder);
    $result = $statement->fetchALL(PDO::FETCH_ASSOC);
    return $result;
  }
//pdo Edit en delete statement
  public function update_delete($statement, $named_placeholder){ 
    $stmt = $this->conn->prepare($statement);
    $stmt->execute($named_placeholder);
    header('location:../kamer.php');
    exit();
  }
}
?>