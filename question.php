<?php 
	include 'connect.php';
	$asd = mysqli_query($connect,'SELECT*FROM questions where question_id = '.$_GET['question_id'].'');
	$das = mysqli_query($connect,'SELECT*FROM answers where question_id = '.$_GET['question_id'].' ORDER BY answers. rating DESC');
?>
<!DOCTYPE html>
<html>
<head>
	<title>lol</title>
	<link rel="apple-touch-icon image_src" href="https://cdn.sstatic.net/Sites/stackoverflow/img/apple-touch-icon.png?v=c78bd457575a">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row" style="height: 20px">
			<div class="" style="width:100px;position: fixed;">
				<div class="row">
					<div class="col">
						<div class="row youarenthere">
							<?php echo "<a href=main.php?user_id=".$_GET['user_id']." style='text-decoration: none;color:black'>" ?>
								<img src="logo.jpeg" class="w-100" style="height: 30px">
							</a>
						</div>
						<div class="row youarenthere" style="margin-top: 30px">
							<?php echo "<a href=main.php?user_id=".$_GET['user_id']." style='text-decoration: none;color:black'>" ?>
											Home							
							</a>
						</div>
						<div class="row youarenthere">
								<?php echo "<a href=users.php?user_id=".$_GET['user_id']." style='text-decoration: none;color:black'>" ?>		
									Users
								</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col" style="border-left: 1px solid #eff0f1;margin-left: 115px">
				<?php 
	 				for ($i=0; $i < $asd->num_rows; $i++) { 
	 					$avatar=$asd->fetch_assoc();
				?>
				<div class="container">
					<div class="row" style="border-bottom: 1px solid #eff0f1;">
						<h1 class="h1">
							<?php echo $avatar['title'] ?>
						</h1>
						<?php echo "<a href=ask.php?user_id=".$_GET['user_id'].">" ?>
							<button class="btn btn-primary offset-12">
								Ask question
							</button>
						<?php echo "</a>" ?>
					</div>

					<div class="row">
						<div class="col">
							<?php echo "<a href=like_question.php?question_id=".$avatar['question_id']."&user_id=".$_GET['user_id']." style='text-decoration: none'>" ?>
								<button class="btn">
									top
								</button>
							</a>
							<h3 class="h3">
								<?php echo $avatar['rating'] ?>
							</h3>
							<?php echo "<a href=dislike_question.php?question_id=".$avatar['question_id']."&user_id=".$_GET['user_id']." style='text-decoration: none'>" ?>
								<button class="btn">
									down
								</button>
							</a>
						</div>
						<div class="col-11">
							
							<div class="row">
								<?php echo $avatar['text'] ?>
							</div>
							<div class="row">
								asked <?php 
								$a = mysqli_query($connect,'SELECT*FROM users where id = '.$avatar['user_id'].'');
								$d=$a->fetch_assoc();
								echo $d['nickname']
								?>
							</div>
							<div class="row">
								<?php 
								if ($_GET['user_id'] == $d['id']) {
								 ?>
								 <form method="GET" action="delete_question.php">
								 	<?php echo "<input type='text' name='question_id' value=".$avatar['question_id']." style='display:none'>"; ?>
								 	<?php echo "<input type='text' name='user_id' value=".$_GET['user_id']." style='display:none'>"; ?>
								 	<button class="btn btn-primary">
								 		Delete question
								 	</button>
								 </form>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="row" style="border-bottom: 1px solid #eff0f1;">
						<div class="col">
							<h3 class="h3">
								<?php echo $das->num_rows.' answers'?>
							</h3>
						</div>
					</div>
					<?php 
	 						for ($i=0; $i < $das->num_rows; $i++) { 
	 						$var=$das->fetch_assoc();
	 						$s = mysqli_query($connect,'SELECT*FROM users where id = '.$var['user_id'].'');
	 					$vars=$s->fetch_assoc();
						?>
					<div class="row" style="border-bottom: 1px solid #eff0f1;">
						<div class="col">
							<?php echo "<a href=like_answer.php?question_id=".$avatar['question_id']."&user_id=".$_GET['user_id']."&id=".$var['id']." style='text-decoration: none'>" ?>
								<button class="btn">
									top
								</button>
							</a>
							<h3 class="h3">
								<?php echo $var['rating'] ?>
							</h3>
							<?php echo "<a href=dislike_answer.php?question_id=".$avatar['question_id']."&user_id=".$_GET['user_id']."&id=".$var['id']." style='text-decoration: none'>" ?>
								<button class="btn">
									down
								</button>
							</a>
							
						</div>
						<div class="col-9">
							<?php echo $var['text'] ?>
						</div>
						<div class="col">
							answered 	
						<?php echo $vars['nickname'] ?>
						</div>

						
					</div>
					<?php } ?>
					<div class="row">
						<h3 class="h3">
							Your answer
						</h3>						
					</div>
					<div class="row">
						<form action="answer_insert.php" method="POST">
							<div class="input-group mb-3">
							  <input type="text" class="form-control" placeholder="Your answer" aria-label="Your answer" aria-describedby="button-addon2" name="text">
							  <div class="input-group-append">
							    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Post your answer</button>
							  </div>
							</div>
							<?php echo "<input type='text' name='question_id' style='display:none' value=".$_GET['question_id'].">" ?>
							<?php echo "<input type='text' name='user_id' style='display:none' value=".$_GET['user_id'].">" ?>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>