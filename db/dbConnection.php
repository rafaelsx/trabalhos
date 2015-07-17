<?php

require 'config/cfTrabalhos.php';

class dbConnection extends cfTrabalhos {
    private $user = "root";
    private $pass = "simao";
    private $host = "localhost:3305";
    private $database = "trabalhos";
    
    private function Connect() {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user , $this->pass);
        return $conn;        
    }
    
    private function RunQuery($sql) {
        $stm = $this->Connect()->prepare($sql);
        $stm->execute();
    }
    private function RunSelect($sql) {
        $stm = $this->Connect()->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
