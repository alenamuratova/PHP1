<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '12345678');
define('DB', 'img');

function getAssocResult($sql){
    $result = executeQuery($sql);

    $arrayResult = array();
    while($row = mysqli_fetch_assoc($result))
        $arrayResult[] = $row;
    
    return $arrayResult;
}

function executeQuery($sql){
    $db = connect();
    $result = mysqli_query($db, $sql);
    mysqli_close($db);
    return $result;
}

function connect() {
    $db = mysqli_connect(HOST, USER, PASS, DB);

    if (!$db) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        exit;
    }

    return $db;
}

