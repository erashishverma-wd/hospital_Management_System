<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background: url('img/manager.jpg');
			background-size: cover;
			height: 80vh;
		}
		label{
			font-family: serif;
		}
		h2{
			font-family: serif;
		}
	</style>
</head>
<body>
<div class="container" align="right">
	<div class="card" style="width: 350px; margin-top: 220px;" align="left">
		<div class="card-body" style="background-color:#1D9DEF  ">
			<form class="form-group" method="post" action="layout.php">
			<h2 align="center">Forgot Password</h2><hr>
			<label>Enter Your Registered Email:</label>
			<input type="email" name="email" autocomplete="off" class="form-control" required>
			<label>Enter New Password:</label>
			<input type="text" name="new" autocomplete="off" class="form-control" required>
			<label>Re-Enter New Password:</label>
			<input type="text" name="rnew" autocomplete="off" class="form-control" required>
			<div align="right">
				<input type="submit" name="forgot_btn_doc" value="Done" class="btn btn-warning" style="margin-top: 15px;">
			</div>
			</form>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>