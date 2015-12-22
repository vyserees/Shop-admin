<?php
$db = array();
//----conection-------
$db['DB_HOST'] = 'localhost';
$db['DB_NAME'] = '';
$db['DB_USER'] = '';
$db['DB_PASS'] = '';
//-----details------
$db['DB_TYPE'] = 'PDO';
$db['DB_CHARSET'] = 'utf8';
$db['DB_ENGINE'] = 'InnoDB';

foreach ($db as $constant => $value) {
    
    define($constant, $value);
    
}