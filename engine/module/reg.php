<?php

require_once '../db.php';


$new_user = $_POST['username'];
$new_password = $_POST['password'];
$hash1 = md5($new_password);

$transfer_sql = "INSERT INTO lesson7.user (user_name, user_password) VALUES ('$new_user', '$hash1');";

mysqli_query(connect(), $transfer_sql);

require_once '../../templates/reg_ok.php';
