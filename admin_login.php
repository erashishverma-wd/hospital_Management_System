<!DOCTYPE html>
<html>
<head>
	<title>Manager Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
	body:before{
	content:'';
	position: fixed;
	width: 100vw;
	height: 100vh;
	background-image: url('img/banner.jpg');
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	--webkit-filter: blur(10px);
	-moz-filter:blur(10px);
}

form{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	font-family: 'Livvic', sans-serif;
	
	padding: 80px 40px;
	background: rgba(0,0,0,0.5);
}
	</style>
</head>
<body>
<form action="layout.php" method="post">
<div class="container" style="color: white; font-family: sans-serif;">	
  <div class="form-group">
  	<h2 align="center" style="letter-spacing: 1px;">Manager Login</h2>
    <label>Username</label>
    <input type="text" class="form-control" name="user" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="pass" autocomplete="off" required>
  </div>
  <div align="right">
  	<a href="forgot_man.php">Forgot Password</a>
  </div>
  <div align="right" style="margin-top: 10px;">
  	<button type="submit" class="btn btn-primary" name="adm_login">Submit</button>
  </div></div>
</form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>