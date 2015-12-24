<?php
mvc_header()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="adm-title">KARAKTERISTIKE</h1>
    </div>
    <div class="col-lg-12" id="msg-success">
        <?php if($data[0]==='s'){
            echo '<p class="msg-success">Uspešno ste izvršili dodavanje karakteristike!</p>';            
        }elseif($data[0]==='d'){
            echo '<p class="msg-success">Uspešno ste izvršili brisanje karakteristike!</p>';
        }elseif($data[0]==='e'){
            echo '<p class="msg-error">Došlo je do greške prilikom obrade!</p>';
        }?>
    </div>
    <div class="col-lg-4">
        <button id="addnew" class="btn btn-primary">Dodajte novu</button>
        <div class="well" hidden="" style="margin-top: 10px;">
            <form action="/procesaddkar" method="post">
                <input type="text" name="naziv" class="form-control" required="" placeholder="naziv nove karaktristike...">
                <div class="radio">
                    <label>
                        <input type="radio" name="tip" value="T" checked="">Tekst polje
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="tip" value="A">Viselinijski tekst
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="tip" value="S">Vise opcija
                    </label>
                </div>
                <hr>
                <input type="submit" value="SNIMITE" class="btn btn-default">
            </form>
        </div>
    </div>
    <div class="col-lg-12"><hr></div>
    <div class="col-lg-4">
        <div class="col-wrapper">
            <h3>Karakteristike</h3>
            <div>
            <ul class="cat-list">
                <?php foreach($data[1] as $k){?>
                <li><p id="item-<?=$k['kar_id']?>">
                        <span><a href="/procesdelkar/<?=$k['kar_id']?>"><i class="fa fa-trash-o fa-lg delkar" style="color:#ff0033;margin-right: 10px;" title="Obrisite karakteristiku"></i></a></span>
                        <?=ucfirst($k['kar_naziv'])?>
                        <?php if($k['kar_tip']==='S'){?>
                        <span class="pull-right"><i class="fa fa-chevron-right fa-lg seeopt"></i></span>
                        <?php }?>
                    </p></li>
                <?php }?>
            </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="col-wrapper">
            <h3>Opcije</h3>
            <div class="opt-list">
                
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $(document).click(function(){
        $('#msg-success').hide();
    });
    $('#addnew').click(function(){
        $(this).siblings().animate({height:'toggle'});
    });
    $('.seeopt').click(function(){
            var item = $(this).parents('p').attr('id');
            drawOpts(item);
        });
    $(document).on('click','.add-opt-field',function(){
        $('.opt-form-list').append('<input type="text" name="'+Math.round(Math.random()*10000)+'" class="form-control" placeholder="unesite naziv opcije" style="margin:5px 0;">');
        $('.opt-form-list').children().last().focus();
    });
    $(document).on('click','.opt-save',function(){
        $('#addopts').submit();
    });
    $(document).on('submit','#addopts',function(e){
        e.preventDefault();
        if($('.opt-form-list').is(':empty')){
            alert('Prvo dodajte polje za unos, klikom na ikonici oznacenoj sa "+"!');
        }else{
        $.ajax({
            url:'/ajax-addopts',
            type:'post',
            data: new FormData(this),
            contentType: false, 
            cache: false,
            processData:false,
            beforeSend:function(){
               $('.opt-list').html('<i class="fa fa-spinner fa-spin fa-5x"></i>');
            },
            success:function(data){
                drawOpts(data);
            }
        });
        }
    });
    $(document).on('click','.delopt',function(){
        var item = $(this).parents('p').attr('id');
        var chr = $(this).parents('ul').attr('id');
        
        $.ajax({
            url:'/ajax-delopt',
            type:'post',
            data:{item:item,chr:chr},
            beforeSend:function(){
               $('.opt-list').html('<i class="fa fa-spinner fa-spin fa-5x"></i>');
            },
            success:function(data){
                drawOpts(data);
            }
        });
    });
    function drawOpts(item){
        $.ajax({
                url:'/ajax-showoptions',
                type:'post',
                data:{item:item},
                beforeSend:function(){
                    $('.opt-list').html('<i class="fa fa-spinner fa-spin fa-5x"></i>');
                },
                success:function(data){
                    $('.opt-list').html(data);
                }
            });
    }
});
</script>
<?php mvc_footer();