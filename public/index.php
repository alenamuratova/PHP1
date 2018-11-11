<?php
require_once('../config/config.php');
require_once('../templates/galery.php');

$file_parts = array();
$i=0;

$directory = "./img"; 
$dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");

while ($file = readdir($dir_handle)) {
    if($file=="." || $file == "..") continue; 
    $file_parts = explode(" ",$file);

    echo
        '<img src="'.$directory.'/'.$file.'" class="img-rounded center-block" width="150" height="150"/>';
    $i++;

};
closedir($dir_handle);

// 4. *[ чуть-чуть алгоритмов ] Напишите функцию, проверяющую пересекаются ли отрезки. 
// Входные параметры: array $a и array $b, каждый с 2-мя элементами, обозначающими начальную и конечную координату отрезка. 
// Выходной параметр boolean - если пересекаются true, если нет false. Пример: [2,6] и [4, 8] - отрезки пересекаются, 
// а [1, 4] и [5, 8] - нет.

function intersection ($a, $b) {
    $aMas = [];
    $bMas = [];
    for ($i = $a[0]; $i <= $a[1]; $i++){
        echo PHP_EOL;
        array_push($aMas, $i);
    }
    for ($i = $b[0]; $i <= $b[1]; $i++){
        echo PHP_EOL;
        array_push($bMas, $i);
    }

    $result = array_intersect($aMas, $bMas);
    print_r($result);

    if ($result) {
        print_r('true');
    } else {
        print_r('false');
    }

}

$a = [1, 4];
$b = [5, 8];
intersection($a, $b);




?>
