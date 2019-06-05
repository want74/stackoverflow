<?php 
		include 'connect.php';
		$lol = mysqli_query($connect, "DELETE FROM questions where question_id=".$_GET['question_id']);
		header("Location: main.php?user_id=".$_GET['user_id']."");
 ?>