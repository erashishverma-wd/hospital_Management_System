<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
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
	top: 115%;
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
		color:#57FF6A;
		font-family: 'Livvic',serif;
		text-align: center;
	}
	</style>
<body>
<div class="container">
	<form class="form-group" action="layout.php" method="post">
		<h2><u> Patient's Registration Form </u></h2>
		<label class="pt-4">ID No:</label>
		<input type="numeric" name="id" class="form-control" required>
		<label class="pt-4">First Name:</label>
		<input type="text" name="fname" class="form-control" required><br>
		<label>Last Name:</label>
		<input type="text" name="lname" class="form-control" required><br>
		<label>Father's Name:</label>
		<input type="text" name="ftname" class="form-control" required><br>
		<label>Diagnosis:</label>
		<input type="text" name="diag" class="form-control"><br>
		<label>Department</label>
		<select class="form-control" name="dep">
			<option value="NULL">--Select--</option>
			<option value="Neurology">Neurology</option>
			<option value="Surgeon">Surgeon</option>
			<option value="Opthamology">Opthamology</option>
			<option value="Orthopedics">Orthopedics</option>
		</select><br>
		<label>Bed No:</label>
		<input type="text" name="bed" class="form-control" required><br>
		<label>Doctor's Name:</label>
		<select class="form-control" name="docname">
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
		<label>City:</label>
		<input type="text" name="city" class="form-control"><br>
		<label>State:</label>
		<input type="text" name="state" class="form-control"><br>
		<label>Contact:</label>
		<input type="numeric" name="con" class="form-control" required><br>
		<label>E-mail:</label>
		<input type="email" name="mail" class="form-control"><br>
		<label>User Name:</label>
		<input type="text" name="reguser" class="form-control" required><br>
		<label>Password Name:</label>
		<input type="Password" name="regpass" class="form-control" required><br>
		<div align="center">
		<input type="submit" name="reg_btn" value="Submit" class="btn btn-success">
		</div>
					
	</form>
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>