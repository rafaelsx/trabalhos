<?php

require_once '../model/evento.php';

class aEvento extends Evento {

    protected $sqlInsert = "insert into eventos (nome_evento, data_evento, id) value ('%', '%', '%')";
    protected $sqlUpdate = "update eventos set nome_evento='%s', data_evento='%s', where id='%s' ";
    protected $sqlDelete = "delete from eventos where id='%s'";
    protected $sqlSelect = "select * , date_format(data_evento.'%s') as data_evento from eventos where 1=1 %s %s ";
   

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
