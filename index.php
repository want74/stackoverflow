<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Very best title of site</title>
	<meta charset="utf-8">
	<style type="text/css">
		.marg {
			margin: 5px
		}
	</style>
</head>
<body class="bg-light">
	<div style="margin-left: 45%; margin-top: 10%">
		<div class="row" style="height: auto;">
			<div class="col-3 bg-white border" style="text-align: center;border-radius: 5px">
				<img src="logo.jpeg" class="w-75 rounded mx-auto d-block">
				<form action="reg_insert.php" method="POST" enctype="multipart/form-data">
					<div class="input-group input-group-sm mb-3" style="margin-top: 1rem;margin-bottom: 1rem">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">E-mail</span>
						</div>
						<input type="reg" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="mail">
					</div>
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Nickname</span>
						</div>
						<input type="reg" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="nickname">
					</div>
					<div class="input-group input-group-sm mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
						</div>
						<input type="reg" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="password">
					</div>
					<div class="input-group input-group-sm mb-3" style="text-align: left;">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="avatar">
							<label class="custom-file-label" for="inputGroupFile04">Avatar</label>
						</div>
					</div>

					<button class="btn btn-warning">
						Registration
					</button>
					<a href="go.php">
						<p class="font-weight-light">
							I have account
						</p>
					</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>