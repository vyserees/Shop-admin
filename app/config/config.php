<?php

$auxilium = array();
$auxilium['APP_NAME'] = 'MVC';
$auxilium['APP_URL'] = 'http://www.mvc.dev/';
$auxilium['APP_TIMEZONE'] = 'Europe/Belgrade';
//$auxilium['DEBUG'] = TRUE;
$auxilium['ROUTER'] = TRUE;

foreach ($auxilium as $constant => $value) {
    
    define($constant, $value);
    
}
 

