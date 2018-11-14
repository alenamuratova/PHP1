<?php

function getAssocResult($sql){
    $result = executeQuery($sql);

    $arrayResult = array();
    while($row = mysqli_fetch_assoc($result))
        $arrayResult[] = $row;
        echo '<span class="views" onclick="alert(\'Это количество просмотров, спасибо и Вам, если посмотрели!\')"></span>';
        echo '<i>' . $row['views'] . '</i>';
        echo '<span class="likes" id="like_' . $row['id'] . '" onclick="like_plus(' . $row['id'] . ')"></span>';
        echo '<i>' . $row['likes'] . '</i>';
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
