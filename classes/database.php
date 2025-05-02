<?php 


    class Database{
        
        public static function connect(){
            $host = "localhost";
            $database = "db";
            $username = "root";
            $password = "";
            
            $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        }
    }


?>

