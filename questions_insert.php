<?php 
include 'connect.php';
		$lol = mysqli_query($connect, "INSERT INTO questions (text, user_id, title ) VALUES ( '". $_POST['text'] . "',  '". $_POST['user_id'] . "','". $_POST['title'] . "')");
		header("Location: main.php?user_id=".$_POST['user_id']."");

 ?>