<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

if (isset($_POST)){
    foreach ($_POST as $in => $val){
        $_POST[$in] = str_replace("'", "\\'", $val);
    }
}

define('APP_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/main/');

require_once 'helper/Bootstrap.php';

use lib\System;

$System = new System();
$System->Run();
