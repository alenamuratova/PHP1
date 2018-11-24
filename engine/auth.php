<?php
require_once 'functions.php';
require_once 'db.php';

/**
 * авторизация через логин и пароль
 */
function authWithCredentials(){
    $db = connect();
    $username = escapeString($db, $_POST['username']);
    $password = $_POST['password'];

    // получаем данные пользователя по логину
    $sql = "SELECT * FROM lesson7.user WHERE user_name = '".$username."'";
    $user = getRowResult($sql);

    var_dump($user);
    // проверяем соответствие логина и пароля
    if(null === $user) {
        $isAuth = false;
    } else {
        $isAuth = checkPassword($password, $user['user_password']);
    }
    
    //запоминаем куки
    setcookie('id_user', $username);
    setcookie('user_password', $password);

    //сохраняем данные в сессии


    if($isAuth) {

        // сохраним данные в сессию
        $_SESSION['user'] = $user;
        echo $_SESSION['user'];
        echo 'Ничего';
    }
    return $isAuth;
}

/**
 * @param string $password
 *
 * @return string
 */
function hashPassword($password) {
    $hash1 = md5($password);
    echo $hash1;
    return $hash1;
}

/**
 * Сверяем введённый пароль и хэш
 *
 * @param $password 3456
 * @param $hash
 *
 * @return bool
 */

function checkPassword($password, $hash){
    return hashPassword($password) === $hash;
}

function alreadyLoggedIn(){
    return isset($_SESSION['user']);
}



