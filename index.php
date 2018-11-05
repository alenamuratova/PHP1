<?php
// Задание 1.
// Объявить две целочисленные переменные $a и $b и задать им произвольные начальные
// значения. Затем написать скрипт, который работает по следующему принципу:
// a. Если $a и $b положительные, вывести их разность.
// b. Если $а и $b отрицательные, вывести их произведение.
// c. Если $а и $b разных знаков, вывести их сумму.
// Ноль можно считать положительным числом.
echo 'Задание 1' . PHP_EOL;
$a = random_int( -100 , 100 );
$b = random_int( -100 , 100 );
echo $a . PHP_EOL . $b;
echo PHP_EOL;

if ( $a >= 0 && $b >= 0 ) {
    echo $a - $b ;
    echo PHP_EOL;
}
else if ( $a < 0 && $b < 0) {
    echo $a * $b ;
    echo PHP_EOL;
}
else {
    echo $a + $b ;
    echo PHP_EOL;
}


// 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора
// switch организовать вывод чисел от $a до 15.
echo 'Задание 2' . PHP_EOL;
$f = random_int( 0 , 15 );

switch( $f ) {
	case 0: 
		echo 0;
	case 1:
        echo 1;    
    case 2:
        echo 2;
    case 3:
        echo 3;
    case 4:
        echo 4;
    case 5:
        echo 5;
    case 6:
        echo 6;         
    case 7:
        echo 7;         
    case 8:
        echo 8;        
    case 9:
        echo 9;           
    case 10:
        echo 10;        
    case 11:
        echo 11;          
    case 12:
        echo 12;          
    case 13:
        echo 13;     
    case 14:
        echo 14;        
    case 15:
        echo 15;
} 

echo PHP_EOL;

// 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
// Обязательно использовать оператор return.
echo 'Задание 3' . PHP_EOL;
$x = random_int( -10 , 10 );
$y = random_int( -10 , 10 );
echo $x . PHP_EOL . $y;
echo PHP_EOL;

    function plus($x, $y) {
        return $x + $y;
    }
 	echo plus($x,$y);
    echo PHP_EOL;

    function minus($x, $y) {
        return $x - $y;
    }
    echo minus($x,$y);
    echo PHP_EOL;

    function div ($x, $y) {
        return $x / $y;
    }
    echo div($x,$y);
    echo PHP_EOL;

    function mult ($x, $y) {
        return $x * $y;
    }
    echo mult($x,$y);
    echo PHP_EOL;



// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В
// зависимости от переданного значения операции выполнить одну из арифметических операций
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

echo 'Задание 4' . PHP_EOL;
$c = random_int( -10 , 10 );
$d = random_int( -10 , 10 );
echo $c . PHP_EOL . $d;
echo PHP_EOL;

function mathOperation($c, $d, $operation) {

switch( $operation ) {
	case '+': 
		echo $c + $d;
		break;
	case '-':
        echo $c - $d;
        break;    
    case '/':
        echo $c / $d;
        break;
    case '*':
        echo $c * $d;
        break;
}  


}

mathOperation($c,$d, '/');
echo PHP_EOL;

// 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести
// текущий год в подвале при помощи встроенных функций PHP. 
// Выведена текущая дата в h1. 

echo 'Задание 5' . PHP_EOL;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" http-equiv="content-type">
    <title>Второе ДЗ</title>
</head>
<body>
    <h1><?php echo date("d.m.Y") ?></h1>

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
</body>
</html>

<?php
// 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function
// power($val, $pow), где $val – заданное число, $pow – степень.
echo 'Задание 6' . PHP_EOL;
$val = random_int( 0, 10 );
$pow = random_int( 0, 10 );
echo $val . PHP_EOL . $pow . PHP_EOL;

function power( $val, $pow ) { 
    if ( $pow === 0 && $val !== 0 ) { 
        return 1;
    }
    else if ($val === 0 && $pow === 0) {
        return "Нуль в нулевой степени не определен, такое выражение не имеет смысла.";

    }
    else {
        return $val * power( $val, $pow - 1);
    }
}

echo power($val, $pow) . PHP_EOL;


// 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с
// правильными склонениями, например: 22 часа 15 минут, 21 час 43 минуты.
echo 'Задание 7' . PHP_EOL;
date_default_timezone_set("Europe/Moscow");	
$hours = array('час', 'часа', 'часов');
$min = array('минута', 'минуты', 'минут');

 function TimeNow ($number, $endingArray) {
    if ($number >= 11 && $number <= 19) {
        $ending = $endingArray[2];
    } 
    else {
        $i = $number % 10;
        switch ($i) {
            case 1:
                $ending = $endingArray[0];
                break;
            case 2:
            case 3:
            case 4:
                $ending = $endingArray[1];
                break;
            default:
                $ending = $endingArray[2];
        }
    }
    return $ending;
 };
$hour = date('G');
$minutes = date('i');
echo $hour . ' ' . TimeNow($hour, $hours) . ' ' .
    $minutes . ' ' . TimeNow($minutes, $min) . PHP_EOL;

// 8. Pяд Фибоначчи
echo 'Задание 8' . PHP_EOL;
function fibonacci($n) {
    $res = array(0,1);

    for( $i = 0; $i < ($n-2); $i++ ) {
        $sum = $res[$i] + $res[$i+1];
        array_push($res,$sum);
    }

    return implode(", ",$res);

};

echo fibonacci(15) ;

?>




