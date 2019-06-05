<?php 
	include 'connect.php';
	$lol = mysqli_query($connect, "INSERT INTO users ( nickname, avatar, mail, password ) VALUES ('". $_POST['nickname'] . "','". $_FILES['avatar']['name'] . "','". $_POST['mail'] . "','". $_POST['password'] . "')");
	move_uploaded_file($_FILES['avatar']['tmp_name'], $_FILES['avatar']['name']);
	header("Location: go.php")
 ?>