<?php
session_start();
$_SESSION['name'] = $username;
$_SESSION['age'] = $password;

require_once '../config/config.php';
require_once LIB_DIR . 'auth.php';

$module = 'index';



if(isset($_GET['module'])) {
    $module = trim(str_replace(['/', '\\', '.'], ['', '', ''], $_GET['module']));
}

if($module !== 'login' && !alreadyLoggedIn()){
    header('Location: /public?module=login');
}

require_once LIB_DIR. 'module/'.$module.'.php';


