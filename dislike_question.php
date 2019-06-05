<?php 
include 'connect.php';
		$lol = mysqli_query($connect, "UPDATE questions set rating = rating-1 WHERE question_id = ".$_GET['question_id']);
		header("Location: http://stackoverflow/question.php?question_id=".$_GET['question_id']."&user_id=".$_GET['user_id']."");
 ?>