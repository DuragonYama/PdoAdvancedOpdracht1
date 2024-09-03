<?php 

class Database {

    public function __construct($db = "test", $user = "root", $pwd = "", $host = "localhost")
    {
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }

}


?>