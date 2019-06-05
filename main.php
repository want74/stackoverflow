<?php 
	include 'connect.php';
	$asd = mysqli_query($connect,'SELECT*FROM questions ORDER BY questions. rating DESC');
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stack Overflow</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/stackoverflow/img/favicon.ico?v=4f32ecc8f43d">
</head>
<body style="font-family: Arial, sans-serif;">
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
						<div class="row youarehere" style="margin-top: 30px">
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
				<div class="row" style="height: 100px ; border-bottom: 1px solid #eff0f1;">
					<div class="col">
						<h1 class="h1" style="font-size: 2.07692308rem !important;">
							Top questions
						</h1>
					</div>
					<div class="col-3">
						<?php echo "<a href=ask.php?user_id=".$_GET['user_id'].">" ?>
							<button class="btn btn-primary ">
								Ask question
							</button>
						<?php echo "</a>" ?>
					</div>
				</div>
				<?php 
	 				for ($i=0; $i < $asd->num_rows; $i++) { 
	 					$avatar=$asd->fetch_assoc();
	 					$das = mysqli_query($connect,'SELECT*FROM users where id = '.$avatar['user_id'].'');
	 					$var=$das->fetch_assoc();
				?>
				<div class="row" style="border-bottom: 1px solid #eff0f1;;height: 60px">
					<div class="col-1" style="width: 100px">
							<div class="row offset-5">
								<h3 class="h3">
									<?php echo $avatar['rating'] ?>
								</h3>
							</div>
							<div class="row offset-4">
								<p>
									votes
								</p>
								
							</div>
					</div>
					<div class="col">
						<a href="" style="text-decoration: none">
							<?php echo "<a href=question.php?question_id=".$avatar['question_id']."&user_id=".$_GET['user_id']." style='text-decoration: none'>" ?>
						<?php echo $avatar['title'] ?>
						<?php echo "</a>" ?>
					</div>
					<div class="col-3">
						asked 	
						<?php echo $var['nickname'] ?>
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="col-2 bg-light">
				<div class="row">
					<a href="http://cpo-status.ru/">
						<img src="ad1.gif" class="w-100" style="height: 286px">						
					</a>
				</div>
				<div class="row">
					<a href="https://buhphone.com/ru/forcustomers/">
						<img src="ad2.jpg" class="w-100" style="height: 286px">						
					</a>
				</div>
				<div class="row">
					<a href="http://www.a-peak.ru/">
						<img src="ad3.jpg" class="w-100" style="height: 286px">						
					</a>
				</div>
				<div class="row">
					<a href="http://azbukaed.ru/">
						<img src="ad4.png" class="w-100" style="height: 286px">						
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>