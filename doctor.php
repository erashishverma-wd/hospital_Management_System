<!DOCTYPE html>
<html>
<head>
	<title>Doctor Registration Form</title>
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
	width: 500px;
	top: 75%;
	left: 50%;
	transform: translate(-50%, -50%);
	padding: 80px 40px;
	background: rgba(0,0,0,0.6);
	}
	label{
		color: white;
		font-family: 'Livvic',serif;
	}
	h2{
		color:#FBFE51;
		font-family: 'Livvic',serif;
		text-align: center;
	}
	</style>
</head>
<body>

<div class="container">

<form class="form-group" action="layout.php" method="post">
		<h2 align="center"><u> Doctor's Registration Form </u></h2>
		<label class="pt-4">Doctor ID:</label>
		<input type="text" name="id" class="form-control" required autocomplete="off">
		<label class="pt-4">First Name:</label>
		<input type="text" name="fname" class="form-control" required autocomplete="off"><br>
		<label>Last Name:</label>
		<input type="text" name="lname" class="form-control" required autocomplete="off"><br>
		<label>Father's Name:</label>
		<input type="text" name="ftname" class="form-control" required autocomplete="off"><br>
		<label>City:</label>
		<input type="text" name="city" class="form-control" autocomplete="off"><br>
		<label>State:</label>
		<input type="text" name="state" class="form-control" autocomplete="off"><br>
		<label>Contact:</label>
		<input type="numeric" name="con" class="form-control" required autocomplete="off"><br>
		<label>E-mail:</label>
		<input type="email" name="mail" class="form-control" autocomplete="off"><br>
		<label>User Name:</label>
		<input type="text" name="docuser" class="form-control" autocomplete="off" required><br>
		<label>Password Name:</label>
		<input type="Password" name="docpass" class="form-control" autocomplete="off" required><br>
		<div align="center" class="pt-4">
		<input type="submit" name="doc_btn" value="Submit" class="btn btn-primary">
</form>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>