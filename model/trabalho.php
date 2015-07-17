<?php

require_once '../db/dbConnection.php';

class Trabalho extends dbConnection {

    private $id;
    private $titulo;
    private $resumo;
    private $palavras_chave;
    private $arquivo;
    private $data_cad;
    private $referencias;
    private $hipotese;
    private $metodologia;
    private $objetivo;
    private $resultado;
    
    public function setID($id) {
        $this->id = $id;
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    public function setResumo($resumo) {
        $this->resumo = $resumo;
    }
    
    public function setPalavrasChave($palavrasChave) {
        $this->palavras_chave = $palavrasChave;
    }
    
    public function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
    }
    
    public function setDataCadastro($dataBR_His) {
        $this->data_cad = $this->dateTimeToUs($dataBR_His);
    }
    
    public function setReferencias($referencias) {
        $this->referencias = $referencias;
    }
    
    public function setHipotese($hipotese) {
        $this->hipotese = $hipotese;
    }
    public function setMetodologia($metodologia) {
        $this->metodologia = $metodologia;
    }
    
    public function setObjetivo($objetivo) {
        $this->objetivo = $objetivo;
    }
    
    public function setResultado($resultado) {
        $this->resultado = $resultado;
    }
    
    public function getID() {
        return $this->id;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }
    
    public function getResumo() {
        return $this->resumo;
    }
    
    public function getPalavrasChave() {
        return $this->palavras_chave;
    }
    
    public function getArquivo() {
        return $this->arquivo;
    }
    
    public function getDataCadastro() {
        return $this->data_cad;
    }
    
    public function getReferencias() {
        return $this->referencias;
    }
    
    public function GetHipotese() {
        return $this->hipotese;
    }
    
    public function getMetodologia() {
        return $this->metodologia;
    }
    
    public function getObjetivo() {
        return $this->objetivo;
    }
    
    public function getResultado() {
        return $this->resultado;
    }
}
