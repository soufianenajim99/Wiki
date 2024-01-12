<?php

const CONFIG = [
    'db'=>'mysql:host=localhost;dbname=wiki_db',
    'db_user' => 'root',
    'db_password' => ''
];

//app root
define('APPROOT',dirname(dirname(__FILE__))) ;

define('URLROOT','http://localhost/Wiki/');
define('URLCSS','http://localhost/Wiki/public/dist/output.css');
define('URLIMG','http://localhost/Wiki/public/img/');

define('SITENAME','Wiki');