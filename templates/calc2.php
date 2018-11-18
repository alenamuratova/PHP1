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

<h3>Задание 2</h3>

<div class="calc_wrapper">
    <form method="post" action="../public/index.php">
        <div class="result_out"></div>

        <input type="text" name="input_a"  placeholder='Введите первое занение'>
        <input type="text" name="input_b"  placeholder='Введите второе занение'>
    <div>
        <input type="button" value="+" name="plus">
        <input type="button" value="-" name="minus">
    </div>
    <div>
        <input type="button" value="*" name="mult">
        <input type="button" value="/" name="div">
    </div>
    <input type="button" value="=" name="result" id="result">
    </form>
</div>

<script>

var inputNumA = $('input[name = "input_a"]');
console.log(inputNumA);
var inputNumB = $('input[name = "input_b"]');


$('input[name = "plus"]').click(function () {
    var a = parseInt(inputNumA.val());
    var b = parseInt(inputNumB.val());

    $.ajax({
        type: 'post',
        url: '../engine/module/task2.php',
        data: { 'input_a': a, 'input_b': b, 'operation' : "plus" }
    }).done(function(result){
        $(".result_out").html(result);
    });
});

$('input[name = "minus"]').click(function () {
    var a = parseInt(inputNumA.val());
    var b = parseInt(inputNumB.val());

    $.ajax({
        type: 'post',
        url: '../engine/module/task2.php',
        data: { 'input_a': a, 'input_b': b, 'operation' : "minus" }
    }).done(function(result){
        $(".result_out").html(result);
    });
});

$('input[name = "mult"]').click(function () {
    var a = parseInt(inputNumA.val());
    var b = parseInt(inputNumB.val());

    $.ajax({
        type: 'post',
        url: '../engine/module/task2.php',
        data: { 'input_a': a, 'input_b': b, 'operation' : "mult" }
    }).done(function(result){
        $(".result_out").html(result);
    });
});

$('input[name = "div"]').click(function () {
    var a = parseInt(inputNumA.val());
    var b = parseInt(inputNumB.val());

    $.ajax({
        type: 'post',
        url: '../engine/module/task2.php',
        data: { 'input_a': a, 'input_b': b, 'operation' : "div" }
    }).done(function(result){
        $(".result_out").html(result);
    });
});


// $('input[name = "minus"]').click(function () {operInput('minus')});
// $('input[name = "mult"]').click(function () {operInput('mult')});
// $('input[name = "div"]').click(function () {operInput('div')});



</script>
</body>
</html>
