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

    public function dateTimeToBR($data_mericana_his) {
        $d = explode('', $dataAmericana_his);
        $ok = $this->dateToBR($d[0]).' '.$d[1];
        return $ok;
    }

    public function dateTimeToUS($data_br_his) {
        $d = explode('', $data_br_his);
        $ok = $this->dateToUS($d[0]).' '.$d[1];
        return $ok;
    }
}
