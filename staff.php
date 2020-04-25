<!DOCTYPE html>
<html>
<head>
	<title>Staff Registration Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background-image: url('img/banner.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			height: 110vh;
		}
	</style>
</head>
<body>
<div class="container">
<div class="card" style="width: 400px; top: 400px; transform: translate(-50%, -50%); left: 50%;margin-top: 50px;">
	<div class="card-body">
		<h3 align="center" style="text-align: center; font-family: serif; color: red;"><u>Staff Registration</u></h3>
		<form class="form-group" method="post" action="layout.php">
		<label>Staff ID:</label>
		<input type="numeric" name="id" class="form-control" required autocomplete="off">
		<label class="pt-4">First Name:</label>
		<input type="text" name="fname" class="form-control" required autocomplete="off">
		<label class="pt-4">last Name:</label>
		<input type="text" name="lname" class="form-control" required autocomplete="off"><br>
		<label>Father's Name:</label>
		<input type="text" name="ftname" class="form-control" required autocomplete="off"><br>
		<label>City</label>
		<input type="text" name="city" class="form-control" autocomplete="off"><br>
		<label>State</label>
		<input type="text" name="state" class="form-control" required autocomplete="off"><br>
		<label>email:</label>
		<input type="email" name="email" class="form-control" required autocomplete="off"><br>
		<label>Contact:</label>
		<input type="numeric" name="con" class="form-control" required autocomplete="off"><br>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<a href="manager_panel.php" class="btn btn-dark">
					Return
				</a></div>
				<div class="col-md-5"></div>
				<div class="col-md-2">
					<input type="submit" name="staff_btn" class="btn btn-success">
				</div>
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