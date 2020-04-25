<!DOCTYPE html>
<html>
<head>
	<title>Appointment Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background-image: url('img/banner.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			height: 100vh;
		}
	</style>
</head>
<body>
<div class="container">
<div class="card" style="width: 400px; top: 400px; transform: translate(-50%, -50%); left: 50%;">
	<div class="card-body">
		<h3 align="center" style="text-align: center; font-family: serif;"><u>Create An Appointment</u></h3>
		<form class="form-group" method="post" action="layout.php">
		<label class="pt-4">Full Name:</label>
		<input type="text" name="fname" class="form-control" required autocomplete="off"><br>
		<label>Father's Name:</label>
		<input type="text" name="ftname" class="form-control" required autocomplete="off"><br>
		<label>Doctor's Name:</label>
		<select class="form-control" name="docname" required>
			<option value="NULL">--Select--</option>
			<option value="Dr.Rajiv Kumar Gupta">Dr. Rajiv Kumar Gupta</option>
			<option value="Dr.Harshit Agrahari">Dr. Harshit Agrahari</option>
			<option value="Dr.Vivek Das">Dr. Vivek Das</option>
			<option value="Dr.Pooja Verma">Dr. Pooja Verma</option>
			<option value="Dr.S.K.Sarraf">Dr. S.K.Sarraf</option>
			<option value="Dr.C Rameshwar">Dr. C Rameshwar</option>
			<option value="Dr.Vijay Singh">Dr. Vijay Singh</option>
			<option value="Dr.Ashish Sehgal">Dr. Ashish Sehgal</option>
			<option value="Dr.Neha Kapoor">Dr. Neha Kapoor</option>
			<option value="Dr.Rohit Tondon">Dr. Rohit Tondon</option>
		</select><br>
		<label>City</label>
		<input type="text" name="city" class="form-control" autocomplete="off"><br>
		<label>Date</label>
		<input type="date" name="date" class="form-control" required autocomplete="off"><br>
		<label>Contact:</label>
		<input type="numeric" name="con" class="form-control" required autocomplete="off"><br>
		<div align="center" style="margin-top: 20px;">
		<input type="submit" name="app_btn" value="Submit" class="btn btn-primary">
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