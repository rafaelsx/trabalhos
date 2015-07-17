<?php

require_once '../db/dbConnection.php';

class Evento extends dbConnection {

    private $id;
    private $nome_evento;
    private $data_evento;

    public function setID($id) {
        $this->id = $id;
    }

    public function setNomeEvento($nomeEvento) {
        $this->nome_evento = $nomeEvento;
    }

    public function setDataEvento($dataBR) {
        $this->data_evento = $this->dateToUS($dataBR);
    }

    public function getID() {
        return $this->id;
    }

    public function getNomeEvento() {
        return $this->nome_evento;
    }

    public function getDataEvento($us = false) {
        if ($us) {
            return $this->data_evento;
        } else {
            return $this->dataToBR($this->data_evento);
        }
    }

}
