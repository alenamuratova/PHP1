<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Урок 5 большая картинка</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<p> Картинки показана =)</p>

<?php
    require_once('../config/config.php');
    $idImg = $_GET['id'];
    $seen = getAssocResult("SELECT * from img.images");
    $newseen = "UPDATE img.images SET img_click = img_click + 1 WHERE ID='$idImg'" ;
?>

<img src="<?php echo '../public/img' . '/img' . $idImg . '.jpg'; ?>" class="img-rounded center-block" width='900' heigth='800'/>
<br>

<?php  
    $result = mysqli_query(connect(), $newseen);
    $seeImg = getAssocResult("SELECT img_click from img.images WHERE ID='$idImg'");
?>

<span>Просмотров - <?php print_r($seeImg[0]['img_click']); ?></span>

</body>
</html>
