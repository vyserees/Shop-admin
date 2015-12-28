<?php

$routes = array(
	'pocetna' => array(
		'controller' => 'home',
		'method' => 'pocetna'
		),
    'error'=>array('controller'=>'error','method'=>'index'),
    'home'=>array('controller'=>'home','method'=>'index'),
    'login'=>array('controller'=>'auth','method'=>'index'),
    'logout'=>array('controller'=>'auth', 'method'=>'logOut'),
    'porudzbine'=>array('controller'=>'home','method'=>'porudzbine'),
    'kreiraj-sablon'=>array('controller'=>'home','method'=>'kreirajSablon'),
    'proizvodi'=>array('controller'=>'home','method'=>'proizvodi'),
    'dodaj-novi'=>array('controller'=>'home','method'=>'dodajNovi'),
    'karakteristike'=>array('controller'=>'home','method'=>'karakteristike'),
    'kategorije'=>array('controller'=>'home','method'=>'kategorije'),
    'multimedija'=>array('controller'=>'home','method'=>'multimedija'),
    'slike'=>array('controller'=>'home','method'=>'slike'),
    'video'=>array('controller'=>'home','method'=>'video'),
    'slajderi'=>array('controller'=>'home','method'=>'slajderi'),
    'blokovi'=>array('controller'=>'home','method'=>'blokovi'),
    'upravljanje-blokovima'=>array('controller'=>'home','method'=>'upravljanjeBlokovima'),
    'filteri'=>array('controller'=>'home','method'=>'filteri'),
    'vidzeti'=>array('controller'=>'home','method'=>'vidzeti'),
    'ostalo'=>array('controller'=>'home','method'=>'ostalo'),
    'stranice'=>array('controller'=>'home','method'=>'stranice'),
    'pocetna-strana'=>array('controller'=>'home','method'=>'pocetnaStrana'),
    'lista-proizvoda'=>array('controller'=>'home','method'=>'listaProizvoda'),
    'singl-proizvod'=>array('controller'=>'home','method'=>'singlProizvod'),
    'korpa-kupovina'=>array('controller'=>'home','method'=>'korpaKupovina'),
    'info-strane'=>array('controller'=>'home','method'=>'infoStrane'),
    'kupci'=>array('controller'=>'home','method'=>'kupci'),
    'podesavanja'=>array('controller'=>'home','method'=>'podesavanja'),
    'dodavanje-admina'=>array('controller'=>'home','method'=>'dodavanjeAdmina'),
    
    /*-----procesi-----*/
    'proceskat'=>array('controller'=>'procesi','method'=>'procesKat'),
    'procesdelkat'=>array('controller'=>'procesi','method'=>'procesDelKat'),
    'procesaddkar'=>array('controller'=>'procesi','method'=>'procesAddKar'),
    'procesdelkar'=>array('controller'=>'procesi','method'=>'procesDelKar'),
    
    /*-----ajax-----*/
    'ajax-showpotkat'=>array('controller'=>'procesi','method'=>'showPotkat'),
    'ajax-showoptions'=>array('controller'=>'procesi','method'=>'showOptions'),
    'ajax-addopts'=>array('controller'=>'procesi','method'=>'addOpts'),
    'ajax-delopt'=>array('controller'=>'procesi','method'=>'delOpt'),
    'ajax-selpot'=>array('controller'=>'procesi','method'=>'selPot')
	);

