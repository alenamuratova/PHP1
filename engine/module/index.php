<?php
require_once(LIB_DIR . '/functions.php');
require_once('../engine/db.php');


$vars = [
    'title' => 'Привет, это стартовая страница',
    'username' => $_SESSION['user']['user_name']
];






require_once TPL_DIR. 'index.php';


