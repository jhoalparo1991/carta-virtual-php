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
            $connection = "mysql:host=".$this->hostname.";dbname=".$this->database;
        $pdo = new PDO($connection,$this->username,$this->password);
     //   echo "Conectado con exito";
        return $pdo;

        } catch (PDOExecption $ex) {
            die($ex->getMessage());
        }
    }


}