<?php
mvc_header()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="adm-title">KATEGORIJE</h1>
    </div>
    <div class="col-lg-12" id="msg-success">
        <?php if($data[0]==='s'){
            echo '<p class="msg-success">Uspešno ste izvršili dodavanje!</p>';            
        }elseif($data[0]==='d'){
            echo '<p class="msg-success">Uspešno ste izvršili brisanje!</p>';
        }elseif($data[0]==='e'){
            echo '<p class="msg-error">Došlo je do greške prilikom obrade!</p>';
        }?>
    </div>
    <div class="col-lg-5">
        <div class="col-wrapper">
            <h3>Kategorije</h3>
            <div>
            <form action="/proceskat" method="post" id="addkat">
                <div class="input-group">
                    <input type="text" name="naziv" class="form-control" required="" placeholder="naziv nove kategorije...">
                    <span class="input-group-addon submit" title="Snimite novu kategoriju"><i class="fa fa-plus fa-lg"></i></span>
                </div>
            </form>
            <hr>
            <ul class="cat-list">
                <?php foreach($data[1] as $k){?>
                <li><p id="item-<?=$k['kat_id']?>">
                        <span><a href="/procesdelkat/kat/<?=$k['kat_id']?>"><i class="fa fa-trash-o fa-lg delkat" style="color:#ff0033;margin-right: 10px;" title="Obrisite kategoriju"></i></a></span>
                        <?=ucfirst($k['kat_naziv'])?>
                        <span class="pull-right"><i class="fa fa-chevron-right fa-lg seepots"></i></span>
                    </p></li>
                <?php }?>
            </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="col-wrapper">
            <h3>Potkategorije</h3>
            <div class="potkat-list"></div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="kat-tree">
            <h3>PREGLED</h3>
            <ul class="kat-tree-kat">
                <?php $kats=$data[2]['kat']; for($i=0;$i<count($kats);$i++){?>
                <li><p><?=ucfirst($kats[$i]['kat_naziv'])?><span class="pull-right toggle-potkat"><i class="fa fa-minus fa-lg"></i></span></p>
                    <ul class="kat-tree-pot">
                        <?php foreach($data[2]['pot'][$i] as $pots){?>
                        <li><p><?=ucfirst($pots['pot_naziv'])?></p></li>
                        <?php }?>
                    </ul>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(document).on('focusin','input',function(){
            $('#msg-success').hide();
        });
        $(document).on('click','.submit',function(){
            if($(this).siblings('[name="naziv"]').val()==''){
                alert('Niste uneli naziv!');
            }else{
                $(this).parent().parent().submit();
            }
        });
        $('.seepots').click(function(){
            var item = $(this).parents('p').attr('id');
            $.ajax({
                url:'/ajax-showpotkat',
                type:'post',
                data:{item:item},
                beforeSend:function(){
                    $('.potkat-list').html('<i class="fa fa-spinner fa-spin fa-5x"></i>');
                },
                success:function(data){
                    $('.potkat-list').html(data);
                }
            });
        });
        $('.toggle-potkat').click(function(){
            var elem = $(this).children('i');
            if(elem.hasClass('fa-plus')){elem.removeClass('fa-plus').addClass('fa-minus');}
            else if(elem.hasClass('fa-minus')){elem.removeClass('fa-minus').addClass('fa-plus');}
            $(this).parents('li').children('ul').animate({height:'toggle'});
        });
    });
</script>
<?php mvc_footer();