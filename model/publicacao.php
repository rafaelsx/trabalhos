<?php

require_once '../db/dbConnection.php';

class Publicacao extends dbConnection {

    private $id;
    private $nome_publicacao;
    private $data_publicacao;

    public function setID($id) {
        $this->id = $id;
    }

    public function setNomePublicacao($nomePublicacao) {
        $this->nome_publicacao = $nomePublicacao;
    }

    public function setDataPublicacao($dataPublicacao) {
        $this->data_publicacao = $dataPublicacao;
    }

    public function getID() {
        return $this->id;
    }
    
    public function getNomePublicacao() {
        return $this->nome_publicacao;
    }
    
    public function getDataPublicacao() {
        return $this->data_publicacao;
    }
}
