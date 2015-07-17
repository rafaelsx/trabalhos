<?php

require_once '../model/publicacao.php';

class aPublicacao extends Publicacao {

    protected $sqlInsert = "insert into publicacoes (id, pessoa_id, trabalho_id, email_pessoa, funcao, instituicao) value ('%', '%', '%', '%', '%', '%')";
    protected $sqlUpdate = "update funcoes set pessoa_id='%s', trabalho_id='%s', email_pessoa='%s', funcao='%s', instituicao='%s', where id='%s' ";
    protected $sqlDelete = "delete from funcoes where id='%s'";
    protected $sqlSelect = "select * from funcoes where 1=1 %s %s ";
    
    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getNomeEvento(), $this->getDataEvento(true));
        return $this->RunQuery($sql);
    }

    public function update() {
        $sql = sprintf($this->sqlupdate, $this->getNomeEvento(), $this->getDataEvento(true), $this->getID());
        return $this->RunQuery($sql);
    }

    public function delete() {
        $sql = sprintf($this->sqlDelete, $this->getID());
        return $this->RunQuery($sql);
    }

    public function select($where='', $order='') {
        $sql = sprintf($this->sqlSelect,'%d/%m/%Y', $where, $order);
        return $this->RunSelect($sql);
    }
    
    public function load() {
        $rs = $this->select(sprintf("and id='%s'",$this->getId()));
        $this->setID($rs[0]['id']);
        $this->setNomeEvento($rs[0]['nome_evento']);
        $this->setDataEvento($rs[0]['data_evento']);
        return $this;
    }
}
