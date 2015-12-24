<?php

class Dashboard extends Model{
    public function getForKategorije(){
        $res = selection('kategorije',null,array('kat_id'));
        return $res;
    }
    public function getTree(){
        $ret = array('kat'=>array(),'pot'=>array());
        $ret['kat'] = $this->getForKategorije();
        foreach($ret['kat'] as $k){
            array_push($ret['pot'],selection('potkategorije',array('pot_kategorije_id'=>$k['kat_id']),array('pot_naziv')));
        }
        return $ret;
    }
    public function getForKar(){
        $res = selection('karakteristike',array('kar_status'=>'C'),array('kar_naziv'));
        return $res;
    }
}