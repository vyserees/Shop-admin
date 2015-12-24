<?php

class Procesi extends Controller{
    public function index(){
        
    }
    /*----normal----*/
    public function procesKat(){
        $post = filter_input_array(INPUT_POST);
        if(isset($post['katid'])){
            $a = inserting('potkategorije',array('pot_kategorije_id'=>$post['katid'],'pot_naziv'=>$post['naziv'],'pot_slug'=>slugging($post['naziv'])));
        }else{
            $a = inserting('kategorije',array('kat_naziv'=>$post['naziv'],'kat_slug'=>slugging($post['naziv'])));
        }
        header('Location: /kategorije/s');
    }
    public function procesDelKat($key,$value){
        if($key==='kat'){
            deletion('kategorije',array('kat_id'=>$value));
            deletion('potkategorije',array('pot_kategorije_id'=>$value));
            header("location: /kategorije/d");
        }elseif($key==='pot'){
            deletion('potkategorije',array('pot_id'=>$value));
            header("Location: /kategorije/d");
        }else{
            header('Location: /kategorije/e');
        }
    }
    public function procesAddKar(){
        $post = filter_input_array(INPUT_POST);
        $a = inserting('karakteristike',array(
            'kar_naziv'=>$post['naziv'],
            'kar_slug'=>slugging($post['naziv']),
            'kar_tip'=>$post['tip'],
            'kar_status'=>'C'
        ));
        header('Location: /karakteristike/s');
    }
    public function procesDelKar($id){
        deletion('karakteristike',array('kar_id'=>$id));
        deletion('opcije',array('opc_karakteristike_id'=>$id));
        deletion('vrednosti',array('vre_karakteristike_id'=>$id));
        header('Location: /karakteristike/d');
    }


    /*----ajax----*/
    public function showPotkat(){
        $i = filter_input(INPUT_POST, 'item');
        $id = explode('-', $i);
        $res = selection('potkategorije',array('pot_kategorije_id'=>$id[1]),array('pot_naziv'));
        $str = '<form action="/proceskat" method="post" id="addpotkat">
                <div class="input-group">
                    <input type="hidden" name="katid" value="'.$id[1].'">
                    <input type="text" name="naziv" class="form-control" required="" placeholder="naziv nove potkategorije...">
                    <span class="input-group-addon submit" title="Snimite novu potkategoriju"><i class="fa fa-plus fa-lg"></i></span>
                </div>
            </form>
            <hr>
            <ul class="cat-list">';
        foreach($res as $p){
            $str .= '<li><p id="item-'.$p['pot_id'].'">'.ucfirst($p['pot_naziv']).'<span class="pull-right"><a href="/procesdelkat/pot/'.$p['pot_id'].'"><i class="fa fa-trash-o fa-lg delkat" style="color:#ff0033;margin-right: 10px;" title="Obrisite kategoriju"></i></a></span>
                    </p></li>';
        }
        $str .= '</ul>
            </div>';
        
        echo $str;
    }
    public function showOptions(){
        $i = filter_input(INPUT_POST, 'item');
        $id = explode('-', $i);
        $res = selection('opcije',array('opc_karakteristike_id'=>$id[1]),array('opc_naziv'));
        $str = '<ul class="cat-list" id="chr-'.$id[1].'">';
        foreach($res as $o){
            $str .= '<li><p id="item-'.$o['opc_id'].'">'.ucfirst($o['opc_naziv']).''
                    . '<span class="pull-right"><i class="fa fa-trash-o fa-lg delopt" style="color:#ff0033;margin-right: 10px;" title="Obrisite opciju"></i></span></li>';
        }
        $str .= '</ul>';
        $str .= '<form action="" id="addopts"><input type="hidden" name="kid" value="'.$id[1].'"><div class="opt-form-list"></div></form>';
        $str .= '<div style="text-align:center;"><button class="btn btn-default add-opt-field" style="display:inline-block;padding:5px 25px;margin-right:15px;">'
                . '<i class="fa fa-plus fa-2x"></i></button>'
                . '<button class="btn btn-primary opt-save" style="display:inline-block;padding:5px 25px;">'
                . '<i class="fa fa-save fa-2x"></i></button></div>';
        
        echo $str;
    }
    public function addOpts(){
        $post = filter_input_array(INPUT_POST);
        
        foreach($post as $key=>$value){
            if($key!=='kid'){
                $a = inserting('opcije',array(
                    'opc_karakteristike_id'=>$post['kid'],
                    'opc_naziv'=>$value,
                    'opc_slug'=>slugging($value)
                ));
            }
        }
        echo 'item-'.$post['kid'];
    }
    public function delOpt(){
        $post = filter_input_array(INPUT_POST);
        $id = explode('-', $post['item']);
        $ch = explode('-', $post['chr']);
        
        deletion('opcije',array('opc_id'=>$id[1]));
        echo 'item-'.$ch[1];
    }
}