<?php

require_once '../db/dbConnection.php';

class TrabAreas extends dbConnection {
    
    private $trabalhoID;
    private $areaID;
    
    public function setTrabalhoID($trabalhoID) {
        $this->trabalhoID = $trabalhoID;
    }
    
    public function setAreaID($areaID) {
        $this->areaID = $areaID;
    }
    
    public function getTrabalhoID() {
        $this->trabalhoID;
    }
    
    public function getAreasID() {
        $this->AreasID;
    }
}