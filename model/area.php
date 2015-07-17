<?php

require_once '../db/dbConnection.php';

class Area extends dbConnection {
    private $id;
    private $nome_area;
    
    public function setID($id) {
        $this->id = $id;
    }
    
    public function setNomeArea($nome) {
        $this->nome_area = $nome;
    }
    
    public function getId() {
        return $this->id;
    }
    
       public function getNomeArea() {
        return $this->nome_area;
    }
}