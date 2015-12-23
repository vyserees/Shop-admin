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
            header("location: /kategorije/d");
        }elseif($key==='pot'){
            deletion('potkategorije',array('pot_id'=>$value));
            header("Location: /kategorije/d");
        }else{
            header('Location: /kategorije/e');
        }
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
}