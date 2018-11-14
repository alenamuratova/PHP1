<?php
require_once('../config/config.php');
require_once('../templates/galery.php');


$img = getAssocResult("select * from img.images");

$vars = [
    'title' => 'Наши новости',
    'imgs' => $img,
];

    foreach ($img as $img): 
        echo
            '<img src="'.'img'.'/'.$img['img_adress'].'" class="img-rounded center-block" width="150" height="150"/>' ;
    
    endforeach;

?>