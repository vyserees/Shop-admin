<?php

$routes = array(
	'pocetna' => array(
		'controller' => 'home',
		'method' => 'pocetna'
		),
    'error'=>array('controller'=>'error','method'=>'index'),
    'logout'=>array('controller'=>'auth', 'method'=>'logOut'),
    'porudzbine'=>array('controller'=>'home','method'=>'porudzbine'),
    'kreiraj-sablon'=>array('controller'=>'home','method'=>'kreirajSablon'),
    'proizvodi'=>array('controller'=>'home','method'=>'proizvodi'),
    'dodaj-novi'=>array('controller'=>'home','method'=>'dodajNovi'),
    'karakteristike'=>array('controller'=>'home','method'=>'karakteristike'),
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
    'kupci'=>array('controller'=>'home','method'=>'kupci')
	);

