<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Урок 6</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <style type="text/css">
    </style>
</head>
<body>
<?php require_once('../config/config.php'); 

    $newReviews = $_POST['text_review'];

    $transfer_sql = "INSERT INTO lesson6.review1 (text_review) VALUES ('$newReviews');";
    
    mysqli_query(connect(), $transfer_sql);

?>

<h3>Задание 3</h3>


    <form method="post" action="">
        <textarea name="text_review" id="text" cols="30" rows="4" placeholder='Введите ваш отзыв'></textarea>
        <br>
        <input type="submit" value="Отправить" name="send_review">
        <div id="result" style='width: 100%'>
            <?php $reviews = getAssocResult("select * from lesson6.review1"); ?>
            <?php foreach ($reviews as $review): ?>
            <div class='review'>
                <p><?php echo $review['text_review']; ?> </p>
                <hr>
            </div>
            <?php endforeach; ?> 
        </div>  

        <input type="submit" value="Удалить все отзывы" name="delete_review" id='delete_review'>

    </form>


<script>

$('input[name = "delete_review"]').click(function () {
    $.ajax({
        type: 'get',
        url: '../engine/module/delete_review.php',
        data: 'delete_review'
    }).done(function(result){
        $(".body").html(result);
    });
});



</script>


</body>
</html>
