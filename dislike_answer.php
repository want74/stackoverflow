<?php 
include 'connect.php';
		$lol = mysqli_query($connect, "UPDATE answers set rating = rating-1 WHERE id = ".$_GET['id']);
		header("Location: http://stackoverflow/question.php?question_id=".$_GET['question_id']."&user_id=".$_GET['user_id']."");
 ?>