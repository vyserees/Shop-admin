<?php

$auxilium = array();
$auxilium['APP_NAME'] = 'Mixer';
$auxilium['APP_URL'] = 'http://www.shopadmin.dev/';
$auxilium['APP_TIMEZONE'] = 'Europe/Belgrade';
//$auxilium['DEBUG'] = TRUE;
$auxilium['ROUTER'] = TRUE;

foreach ($auxilium as $constant => $value) {
    
    define($constant, $value);
    
}
 

