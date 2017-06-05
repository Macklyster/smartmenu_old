<?php

session_start();

if (isset($_POST)){
    foreach ($_POST as $in => $va){
        $_POST[$in] = str_replace("'", "\\'", $va);
    }
}

define('APP_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/smartmenu/');

require_once 'vendor/Bootstrap.php';

use libs\System;

$System = new System();
$System->Run();