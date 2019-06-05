<?php 
include 'connect.php';
$query = mysqli_query($connect,"SELECT * FROM users where mail = '".$_POST['mail']."' AND password = '".$_POST['password']."'");
$avatar=$query->fetch_assoc();
		if ($query->num_rows == '1') {
			header("Location: main.php?user_id=".$avatar['id']."");
		}else{
			header('Location: go.php?error=Нет%20такого%20пользователя');
		}
?>    
<meta charset="utf-8">	