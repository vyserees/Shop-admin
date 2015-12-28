<?php
mvc_header()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="adm-title">DODAVANJE NOVOG PROIZVODA</h1>
        <hr>
    </div>
    <div class="col-lg-12" id="msg-success">
        <?php if($data[0]==='s'){
            echo '<p class="msg-success">Uspešno ste izvršili dodavanje novog proizvoda!</p>';            
        }elseif($data[0]==='e'){
            echo '<p class="msg-error">Došlo je do greške prilikom obrade!</p>';
        }?>
    </div>
    <div class="col-lg-3">
        <div class="kat-tree">
            <button id="addnew" class="btn btn-primary btn-lg" style="width: 100%;">SNIMITE</button>
            <hr>
            <h3>KATEGORIJE</h3>
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
    <div class="col-lg-9">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Osnovni podaci</a></li>
          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Dodatne karakteristike</a></li>
          <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Multimedija</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="home">
           
                    <form action="" method="post" id="addosnovne">
                        <div class="row">
                        <div class="col-lg-6">
                            <label>Šifra proizvoda</label>
                            <input type="text" name="sku" class="form-control">
                        </div>
                        <div class="col-lg-6">
                            <label>Naziv proizvoda</label>
                            <input type="text" name="naziv" class="form-control">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-6">
                            <label>Kategorija</label>
                            <select name="kategorija" class="form-control">
                                <option value="">izaberite</option>
                                <?php $kats = selection('kategorije');foreach($kats as $kat){ ?>
                                <option value="<?=$kat['kat_id']?>"><?=ucfirst($kat['kat_naziv'])?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Potkategorija</label>
                            <select name="potkategorija" class="form-control">
                            </select>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-2">
                            <label>PDV stopa</label>
                            <select name="pdv" class="form-control">
                                <option value="20">20%</option>
                                <option value="10">10%</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label>Popust (u %)</label>
                            <input type="number" max="95" min="0" step="5" value="0" name="popust" class="form-control">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-5">
                            <label>Kraci opis</label>
                            <textarea name="kratak" rows="6" class="form-control"></textarea>
                        </div>
                        <div class="col-lg-7">
                            <label>Detaljniji opis</label>
                            <textarea name="dugacak" rows="10" class="form-control"></textarea>
                        </div>
                        </div>
                    </form>
            
            </div>
            <div role="tabpanel" class="tab-pane fade" id="profile">
                <h1>aaaaaa</h1>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="messages">
                <form action="" method="post" enctype="multipart/form" id="addslike">
                    <div class="row">
                    <div class="col-lg-12">
                        <label>Dodavanje slika (možete dodati više slika odjednom)</label>
                        <input type="file" name="slike[]" class="file" id="slike" multiple="">
                    </div>
                    </div>
                </form>
            </div>
        </div>
</div>
<script>
$(document).ready(function(){
    $('[name="kategorija"]').change(function(){
        var kid = $(this).val();
        if(kid!=''){
            $.ajax({
                url:'/ajax-selpot',
                type:'post',
                data:{kid:kid},
                success:function(data){
                    $('[name="potkategorija"]').html(data);
                }
            });
        }
    });
    $('#slike').fileinput({
	showUpload: false,
        maxFileCount: 10,
        allowedFileExtensions: ['jpg']
	//maxFileSize: 800
    });
});
</script>
    
<?php mvc_footer();
