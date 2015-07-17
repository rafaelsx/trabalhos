<?php

require_once '../model/pessoa.php';

class aPessoa extends Pessoa {

    protected $sqlInsert = "insert into pessoas (id, nome_pessoa) value ('%', '%')";
    protected $sqlUpdate = "update funcoes set nome_pessoa='%s', where id='%s' ";
    protected $sqlDelete = "delete from pessoas where id='%s'";
    protected $sqlSelect = "select * from pessoas where 1=1 %s %s ";
    
    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getNomePessoa());
        return $this->RunQuery($sql);
    }

    public function update() {
        $sql = sprintf($this->sqlupdate, $this->getNomePessoa(), $this->getID());
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
        $this->setNomeEvento($rs[0]['nome_pessoa']);
        return $this;
    }
}
