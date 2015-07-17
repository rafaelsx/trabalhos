<?php

require_once '../db/dbConnection.php';

class Funcao extends dbConnection {

    private $pessoa_id;
    private $trabalho_id;
    private $email_pessoa;
    private $funcao;
    private $instituicao;

    public function setPessoaID($id) {
        $this->pessoa_id = $id;
    }

    public function setTrabalhoID($trabalhoID) {
        $this->trabalho_id = $trabalhoID;
    }

    public function setEmailPessoa($emailPessoa) {
        $this->email_pessoa = $emailPessoa;
    }

    //passa como padrão função igual Author 'a'
    public function setFuncao($funcao='A') {
        $this->funcao = $funcao;
    }

    public function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }

    public function getPessoaID() {
        return $this->pessoa_id;
    }
    public function getTrabalhoID() {
        return $this->trabalho_id;
    }
    public function getEmailPessoa() {
        return $this->email_pessoa;
    }
    
    public function getFuncao() {
        return $this->funcao;
    }
    
    public function getInstituicao() {
        return $this->instituicao;
    }
}
