<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class Dbh{


  //Author: Chere


    //properties
    private $dbName;
    private $serverName;
    private $username;
    private $password;
    private $charset;
    //This function connects to Database;
    function connect(){
      $this->dbName = 'iles_applications';
      $this->serverName = 'localhost';
      $this->username = 'root';
      $this->password = '';
      $this->charset = 'utf8mb4';

  try {
    $dsn = 'mysql:host='.$this->serverName. ';dbname='.$this->dbName.";charset=".$this->charset;
    $pdo = new PDO($dsn,$this->username, $this->password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,TRUE);
    return $pdo;
    echo($pdo);  }
  catch (PDOException $e) {
    echo "Connection" .$e.getMessage();
    }
    }
  }
   ?>
