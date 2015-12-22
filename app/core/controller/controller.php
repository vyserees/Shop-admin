<?php

abstract class Controller {

    public abstract function index();
    
    public static function model($model){
        $file = APP_PATH . 'models/' . $model . '.php';
	if (class_exists(ucfirst($model)) && file_exists($file)) {
		return (new $model);
	}
    }
    public static function view($view, $data = NULL, $nh=null) {
	$file = APP_PATH . 'views/' . $view . '.php';
	if (file_exists($file)&&null===$nh) {
            include_once '/app/inc/header.php';
            include_once $file;
            include_once '/app/inc/footer.php';
	}elseif(file_exists($file)&&null!==$nh){
            include_once $file;
        }
    }

}
