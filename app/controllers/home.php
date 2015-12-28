<?php

class Home extends Controller {

    public function index($s=null) {
        if(null!==$s){
                $data = $s;
            }else{
                $data = '';
            }
        self::view('auth/login',$data);
    }
    public function pocetna(){
        self::view('home/index');
    }
    public function porudzbine(){
        self::view('porudzbine/index');
    }
    public function proizvodi(){
        self::view('proizvodi/index');
    }
    public function dodajNovi($m=null){
        if(null!==$m){
            $data = array($m,'',self::model('dashboard')->getTree());
        }else{
            $data = array('','',self::model('dashboard')->getTree());
        }
        self::view('proizvodi/novi',$data);
    }
    public function karakteristike($m=null){
        if(null!==$m){
            $data = array($m,self::model('dashboard')->getForKar());
        }else{
            $data = array('',self::model('dashboard')->getForKar());
        }
        self::view('proizvodi/karakteristike',$data);
    }
    public function kategorije($m){
        if(null!==$m){
            $data = array($m,self::model('dashboard')->getForKategorije(),self::model('dashboard')->getTree());
        }else{
            $data = array('',self::model('dashboard')->getForKategorije(),self::model('dashboard')->getTree());
        }
        self::view('proizvodi/kategorije',$data);
    }
    public function multimedija(){
        self::view('multimedija/index');
    }
    public function blokovi(){
        self::view('blokovi/index');
    }
    public function stranice(){
        self::view('stranice/index');
    }
    public function kupci(){
        self::view('kupci/index');
    }
    public function podesavanja(){
        self::view('podesavanja/index');
    }
    

}
