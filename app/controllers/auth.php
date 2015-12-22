<?php

class Auth extends Controller{
    public function index(){
        if(null!==  filter_input_array(INPUT_POST)){
            $post = filter_input_array(INPUT_POST);
            self::logAuth($post);
        }  
    }
    private static function logAuth($post){
       $res = selection('admini',array('adm_username'=>$post['name'],'adm_password'=>md5($post['password'])));
       if(count($res)>0){
           session_start();
           session_regenerate_id();
           $_SESSION['ADMIN_ID'] = $res[0]['adm_id'];
           $_SESSION['ADMIN_NAME'] = $res[0]['adm_name'];
           $_SESSION['ADMIN_ROLE'] = $res[0]['adm_role'];
           
           header('Location: /pocetna');
           
       }else{
           header('Location: /home/e');
       }
        
    }
    public function logOut(){
        session_start();
        session_unset();
        session_destroy();
        header('Location: /');
    }
}
