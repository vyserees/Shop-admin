<?php

class Dashboard extends Model{
    public function getForKategorije(){
        $res = selection('kategorije',null,array('kat_naziv'));
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
}