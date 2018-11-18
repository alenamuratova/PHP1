<?php
require_once('../config/config.php');
require_once('../templates/calc.php');
require_once('../templates/calc2.php');

require_once('../templates/review.php');

//Задание 1

$feedback_a = mysqli_real_escape_string(connect(),(string)htmlspecialchars(strip_tags($_POST['a'])));
$feedback_b = mysqli_real_escape_string(connect(),(string)htmlspecialchars(strip_tags($_POST['b'])));
$select = $_POST['select'];

$transfer_sql = "UPDATE lesson6.task_01 SET a = '$feedback_a', b = '$feedback_b', operation = '$select' WHERE id_operation = 1;" ;
$result1 = mysqli_query(connect(), $transfer_sql);

$operation = $seen = getAssocResult("SELECT operation from lesson6.task_01");

if(isset($_POST['a']) && isset($_POST['b'])) {
    if ($operation[0]['operation'] == "Вычитание") {
        $result = $_POST['a'] - $_POST['b'];
    }
    elseif ($operation[0]['operation'] == "Сложение") {
        $result = $_POST['a'] + $_POST['b'];
    }
    elseif ($operation[0]['operation'] == 'Умножение') {
        $result = $_POST['a'] * $_POST['b'];
    }
    else {
        $_POST['b'] === 0 ? $result = 'УПС! Деление на 0 =(' : $result = $_POST['a'] / $_POST['b'];      
    }
} else {
    $result = "что-то не получилось!";
}



?>
