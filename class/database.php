<?php

//CONFIG

class Database
{
  public $conn;

  public function  __construct()
  {
    
    $servername = "localhost";
    $username = "root";
    $password = "root";

    try {
      $this->conn = new PDO("mysql:host=$servername;dbname=buy", $username, $password);
    // set the PDO error mode to exception
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //echo "Connected successfully"; 
    }
    catch(PDOException $e)
    {
      echo "Connection failed: " . $e->getMessage();
    }
  }

}





