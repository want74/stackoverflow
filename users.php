<?php 
	include 'connect.php';
	$asd = mysqli_query($connect,'SELECT*FROM questions ORDER BY questions. rating DESC');
	$user = mysqli_query($connect,'SELECT*FROM users ORDER BY users. numberAnswers DESC');
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>lol</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
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
						<div class="row youarenthere" style="margin-top: 30px">
							<?php echo "<a href=main.php?user_id=".$_GET['user_id']." style='text-decoration: none;color:black'>" ?>
								Home
							</a>
						</div>
						<div class="row youarehere">
							<?php echo "<a href=users.php?user_id=".$_GET['user_id']." style='text-decoration: none;color:black'>" ?>		
								users
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col" style="border-left: 1px solid #eff0f1;margin-left: 115px">
				<div class="row" style="height: 100px ; border-bottom: 1px solid #eff0f1;">
					<div class="col">
						<h1 class="h1" style="font-size: 2.07692308rem !important;">
							users
						</h1>
					</div>
				</div>
				
				<div class="row" >
					<?php 
	 				for ($i=0; $i < $user->num_rows; $i++) { 
	 					$avatar=$user->fetch_assoc();	
				?>
						<div class="col-3" style="margin-bottom: 50px">
							<div class="row">
								<div class="col">
									<?php 
													echo "<img style='height: 60px;width:60px' src=". $avatar['avatar'].">"
												 ?>
								</div>
								<div class="col">
									<div class="row">
										<div class="col">
											<div class="row">
												<?php 
													echo $avatar['nickname']
												 ?>
											</div>
											<div class="row">
												<?php 
													echo $avatar['numberAnswers'];
												 ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html>