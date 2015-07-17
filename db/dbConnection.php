<?php
require './config/cfTrabalhos.php';
ini_set("display_errors", true);

class dbConnection extends cfTrabalhos{

    private $user = "root";
    private $pass = "simao";
    private $host = "localhost:3305";
    private $database = "trabalhos";

    private function Connect() {
        $conn = new PDD("msql:host=$this->host;dbname=$this->database", );
        return $conn;
    }

}
