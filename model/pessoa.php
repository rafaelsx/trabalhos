<?php

require_once '../db/dbConnection.php';

class Pessoa extends dbConnection {

    private $id;
    private $nome_pessoa;

    public function setID($id) {
        $this->id = $id;
    }

    public function setNomePessoa($nomePessoa) {
        $this->id = $nomePessoa;
    }

    public function getID() {
        return $this->id;
    }

    public function getNomePessoa() {
        return $this->nome_pessoa;
    }

}
