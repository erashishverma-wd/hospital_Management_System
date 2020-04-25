<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		body{
		background-image: url('img/banner1.jpg');background-repeat: no-repeat;background-size: cover; height: 100vh;
		}
		label{
			color: black;
		}
		h2{
			color: black
		}
	</style>
</head>
<body>
<div class="container" style="color: white; font-family: sans-serif; width: 400px; margin-top: 50px;">
<div class="card" style="background-color: skyblue;">
<img src="img/super.png" class="card-img-top" alt="super admin logo" >
<div class="card-body">
<form action="adminpanel.php" method="post">	
  <div class="form-group">
  	<h2 align="center">Super Admin Login</h2><hr>
    <label>Username</label>
    <input type="text" class="form-control" name="user" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="pass" autocomplete="off" required>
  </div>
  <div align="right">
  	<a href="fogot_admin.php" style="color: red;">Forgot Password</a>
  </div>
  <div align="right" style="margin-top: 10px;">
  	<button type="submit" class="btn btn-primary" name="sup_login">Submit</button>
  </div>
</div>
</form>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>