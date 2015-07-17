<?php

require_once '../model/area.php';

class aAreas extends Area {

    protected $sqlInsert = "insert into areas (nome_area) value ('%')";
    protected $sqlUpdate = "update areas set nome_area='%s' where id='%s' ";
    protected $sqlSelect = "select * from areas where 1=1 %s %s ";
    protected $sqlDelete = "delete from areas where id='%s'";

    public function insert() {
        $sql = sprintf($this->sqlInsert, $this->getNomeArea());
        return $this->RunQuery($sql);
    }

    public function update() {
        $sql = sprintf($this->sqlupdate, $this->getNomeArea() . $this->getId());
        return $this->RunQuery($sql);
    }

    public function delete() {
        $sql = sprintf($this->sqlDelete, $this->getId());
        return $this->RunQuery($sql);
    }

    public function select($where='', $order='') {
        $sql = sprintf($this->sqlSelect, $where, $order);
        return $this->RunQuery($sql);
    }
    
    public function load() {
        $rs = $this->select(sprintf("and id='%s'",$this->getId()));
        $this->setID($rs[0]['id']);
        $this->setNomeArea($rs[0]['nome_area']);
        return $this;
    }

}
