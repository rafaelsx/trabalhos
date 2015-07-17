<?php

class cfTrabalhos {
    public function dateToBR($dataAmericana){
        //2011-09-11
        $d = explode('-', $dataAmericana);
        $dOK = $d[2] .'/'.$d[1].'/'.$d[0];
        return $dOK;
    }
    
    public function dateToUS($dataBrasil) {
        $d = explode('/', $dataBrasil);
        $dOK = $d[2] .'-'.$d[1].'-'.$d[0];
        return $dOK;
    }
}
