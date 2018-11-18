<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Урок 6</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <style type="text/css">
      .calc_wrapper{
    width: 260px;
    text-align: center;
    border: 1px solid green;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    }
    input[type = 'button']{
        margin: 5px;
        display: inline-block;
        width: 25px;
        border: 1px solid green;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        outline-color: green;
    }
    .result_out{
        width: 250px;
        height: 20px;
        margin: 10px auto;
        background-color: #999;
        color: #fff;
        border: 1px solid green;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
    }
    #result{
        width: 60px;
    }
    </style>
</head>
<body>

<?php include('../public/index.php'); ?>

<h3>Задание 1</h3>
<form method="post" action="../public/index.php">

<input type="text" name="a"/>

<select name="select">
    <option value="Сложение">Сложение</option> 
    <option value="Вычитание">Вычитание</option>
    <option value="Умножение">Умножение</option>
    <option value="Деление">Деление</option>
</select>

<input type="text" name="b"/> 
<input type="submit" value="="/> 

<?php echo PHP_EOL . 'Результат' . PHP_EOL . $_POST['a'] . PHP_EOL . 'и' . PHP_EOL . $_POST['b'] . PHP_EOL . 'равен' . PHP_EOL . $result; ?>

</form>



</body>
</html>
