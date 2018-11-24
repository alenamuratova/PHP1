<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '12345678');
define('DB', 'lesson7');

function getAssocResult($sql){
    $result = executeQuery($sql);

    $arrayResult = array();
    while($row = mysqli_fetch_assoc($result)){
        $arrayResult[] = $row;
    }

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
        echo 'Ошибка: Невозможно установить соединение с MySQL.'. PHP_EOL;
        exit;
    }

    return $db;
}

function getAllTableData($tableName, $select = '*', $limit = null, $order = null, $orderDirection = 'ASC'){
    $sql = 'SELECT '. $select .' FROM '. $tableName;

    if(null !== $order) {
        $sql .= ' ORDER BY '. $order . ' ' . $orderDirection;
    }

    if(null !== $limit) {
        $sql .= ' LIMIT '. $limit;
    }

    return getAssocResult($sql);
}

function getRowResult($sql){
    $array_result = getAssocResult($sql);

    if(isset($array_result[0])){
        $result = $array_result[0];
    } else {
        $result = null;
    }


    return $result;
}
