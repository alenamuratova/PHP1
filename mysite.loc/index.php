<?php

// Задание 3

$a = 5;
$b = '05';
var_dump($a == $b);         // Почему true? При сравнении строка '05' преобразовывается в число и получается, что числа равны.

var_dump((int)'012345');     // Почему 12345? Потому что integer  - это целочисленные значения

var_dump((float)123.0 === (int)123.0); 
// Почему false? Потому что использозуется строгое равенство, а здесь у нас сравниваются разные типы данных, поэтому они не равны.

var_dump((int)0 === (int)'hello, world8'); 
// Почему true? Если строка пустая или первый символ строки не является цифрой, знаком + или -, она преобразуется в 0. 


// Задание 4

$h1 = 'Title h1';
$title = 'Title title';
$today = date("d.m.Y");


//Задание 5

$a = 2;
$b = 1;

$b = $a + $b; //1+2=3
$a = $b - $a; //3-1=2
$b = $b - $a; //3-2=1

echo $a . PHP_EOL . $b;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" http-equiv="content-type">
    <title><?= $title; ?></title>
</head>
<body>
    <h1><?= $today . ' ' . $h1; ?></h1>

    <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">archive</a></li>
        <li><a href="#">contact</a></li>
    </ul>
    <div class="post">
        <div class="detail">
            <h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
            <p class="info">posted 3 hours ago in <a href="#">general</a></p>
        </div>
        <div class="body">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        </div>
        <div class="x"></div>
    </div>
    <div class="col">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        <p>&not; <a href="#">read more</a></p>
    </div>
    <div class="col">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        <p>&not; <a href="#">read more</a></p>
    </div>
    <div class="col last">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
        <p>&not; <a href="#">read more</a></p>
    </div>
    <div id="footer">
        <p>Copyright &copy; <em>mini</em> &middot; Design: <a href="#">...</a><span>01.01.2018</span> </p>
    </div>


</body>
</html>

