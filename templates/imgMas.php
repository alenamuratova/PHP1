<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Урок 5</title>
</head>
<style type="text/css">
        body { 
        display: flex;
        flex-wrap: wrap;
        }
        img {
            display: block;
        }
        span {
            padding-left: 15px;
        }
        .img {
            border: 2px solid gray;
            border-radius: 3px;
        }
</style>

<body>

<?php require_once('../config/config.php'); ?>
<?php $img = getAssocResult("select * from img.images ORDER BY img_click DESC");
$seen = 2;
?>
<?php foreach ($img as $image): ?>
<div class='img'>
    <a href="<?php echo TPL_DIR . '/' . 'bigImg.php' . '?id=' . $image['id'];?>" target="_blank"><img src="<?php echo IMG_DIR . '/' . $image['img_adress']; ?>" class="img-rounded center-block" width="150" height="150"/> </a>
    <span>Просмотров - <?php echo $image['img_click']; ?></span>
</div>
<?php endforeach; ?>



</body>
</html>
