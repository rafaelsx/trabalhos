<?php

require_once '../db/dbConnection.php';

class TrabPublicacao extends dbConnection {
    
    private $trabalho_id;
    private $publicacao_id;
    
    public function setTrabalhoID($trabalhoID) {
        $this->trabalho_id = $trabalhoID;
    }
    
    public function setPublicacaoID($publicacaoID) {
        $this->publicacao_id = $publicacaoID;
    }
    
    public function getTrabalhoID() {
        return $this->trabalho_id;
    }
    
    public function getPublicacaoID() {
        return $this->publicacao_id;
    }
}