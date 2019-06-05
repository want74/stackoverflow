<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<div class="fluid">
		<div style="" class="one">
			<form action="questions_insert.php" method="POST">
			 	<input type="text" name="title" placeholder="Title" class=" form-control col-3 offset-4">
			 	<input type="text" name="text" placeholder="Body" class="form-control col-3 offset-4">
			 	<?php 
				echo '<input name = "user_id" value = "'. $_GET['user_id'] . '"  style="display:none">';
			 	 ?>

			 	<div class="row">
			 	<button class="btn offset-4 col-3">
			 		Create question
			 	</button>
			 	</div>			
			</form> 
		</div>
	</div>
</body>
</html>
