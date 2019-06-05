<?php 
		include 'connect.php';
		$lol = mysqli_query($connect, "INSERT INTO answers (text, user_id, question_id ) VALUES ('". $_POST['text'] . "',  '". $_POST['user_id'] . "','". $_POST['question_id'] . "')");
		$G =  mysqli_query($connect, "UPDATE users SET  numberAnswers = numberAnswers+1 where id = '". $_POST['user_id'] . "'");
		header("Location: http://stackoverflow/question.php?question_id=".$_POST['question_id']."&user_id=".$_POST['user_id']."");
 ?>