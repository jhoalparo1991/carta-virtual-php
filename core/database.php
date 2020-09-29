<?php

require_once 'config.php';

class Database{
   
    private $username;
    private $password;
    private $database;
    private $hostname;

    function __construct(){
        $this->username = constant('USERNAME');
        $this->password = constant('PASSWORD');
        $this->database = constant('DATABASE');
        $this->hostname = constant('HOSTNAME');
    }

     function connect(){
        try {
            $connection = "mysql:host=".$this->hostname.";port=".PORT.";dbname=".$this->database;
            $pdo = new PDO($connection,$this->username,$this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //   echo "Conectado con exito";
        return $pdo;

        } catch (PDOExecption $ex) {
            die("Error in database : ".$ex->getMessage());
        }
    }


}