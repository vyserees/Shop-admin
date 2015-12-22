<?php

class Auth extends Controller{
    public function index($s=null){
        if(null!==  filter_input_array(INPUT_POST)){
            $post = filter_input_array(INPUT_POST);
            self::logAuth($post);
        }  else {
            if(null!==$s){
                $data = $s;
            }else{
                $data = '';
            }
            self::view('auth/login', $data); 
        }
    }
    private static function logAuth($post){
       
        
    }
    public function logOut(){
        session_start();
        session_unset();
        session_destroy();
        header('Location: /');
    }
}
