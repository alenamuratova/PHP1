<?php 
require_once('../db.php'); 

mysqli_query(connect(), 'DELETE FROM lesson6.review1 WHERE id > 0'); 
?>