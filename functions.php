<?php

function mvc_header(){
    include_once MVC_PATH.'/app/inc/header.php';
}
function mvc_footer(){
    include_once MVC_PATH.'/app/inc/footer.php';
}

function selection($table,$where=null,$order=null,$ascdesc=null,$between=null,$limit=null){
    $q = new Query();
    $q->table = $table;
    if(null!==$where){$q->where = $where;}
    if(null!==$order){$q->order = $order;}
    if(null!==$ascdesc){$q->ascdesc = $ascdesc;}
    if(null!==$between){$q->between = $between;}
    if(null!==$limit){$q->limit = $limit;}
    $res = $q->read();
    return $res;
}
function updating($table,$where,$updatearray){
    $q = new Query();
    $q->table = $table;
    $q->where = $where;
    $q->updatearray = $updatearray;
    $q->change();
}
function inserting($table,$insertarray){
    $q = new Query();
    $q->table = $table;
    $q->insertarray = $insertarray;
    $q->insert();
    return $q->lastInsertId();
}
function deletion($table,$where){
    $q = new Query();
    $q->table = $table;
    $q->where = $where;
    $q->delete();
}
function q_custom($str){
    $q = new Model();
    $ex = $q->prepare($str);
    $ex->execute();
    $res = $ex->fetchAll();
    return $res;
}
function mailing($to,$from,$subject,$message,$attachment=null){
    $e = new Email();
    $e->to_email = $to;
    $e->from_email = $from;
    $e->subject_str = $subject;
    $e->message_str = $message;
    $e->attachment = $attachment;
    $e->sendmail();
}
function images($file,$savePath,$newWidth,$newHeight,$options=null,$quality=null){
    $r = new Resize($file);
    $r->resizeImage($newWidth, $newHeight, $options);
    $r->saveImage($savePath, $quality);
}
