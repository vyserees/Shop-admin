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

    

}
