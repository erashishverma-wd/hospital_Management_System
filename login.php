<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
	body:before{
	content:'';
	position: fixed;
	width: 100vw;
	height: 100vh;
	background-image: url('img/back.jfif');
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
  	<h2 align="center" style="letter-spacing: 1px;">Login</h2>
    <label>Username</label>
    <input type="text" class="form-control" name="user" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="pass" required>
  </div>
  <div align="right">
  	<button type="submit" class="btn btn-primary" name="btn_login">Submit</button>
  </div>
</form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>