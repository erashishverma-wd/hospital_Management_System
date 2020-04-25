<!DOCTYPE html>
<html>
<head>
	<title>Manager Panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="jumbotron" style="background: url('img/banner.jpg');height: 400px; background-size: cover;">
	</div>
	<hr width="100%">

<div class="container-fluid">
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
			<a class="list-group-item" style="background-color: #FF4747; color: white; text-align: center; ">Profile</a>
			<a href="" class="list-group-item">Edit Profile</a><!-- Created by: Ashish Verma -->
			<a href="change_man.php" class="list-group-item">
			Change Password</a>
			<a href="admin_login.php" class="list-group-item">
			Log Out</a>
		</div>
		<hr>
		<div class="list-group">
			<a class="list-group-item" style="background-color: #FF4747; color: white; text-align: center;">Categories</a>
			<a href="doctor_list2.php" class="list-group-item">
			Doctor's Info</a>
			<a href="patientdetails1.php" class="list-group-item">
			Patients Info</a>
			<a href="staff_details.php" class="list-group-item">Staff Info</a>
			<a href="schedule.php" class="list-group-item">OPD Schedule</a>
			<a href="schedule.php" class="list-group-item">Paid OPD Schedule</a>
			<a href="doctor.php" class="list-group-item">Add Docotor</a>
			<a href="staff.php" class="list-group-item">Add Staff</a>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body" style="background-color: #FF4747; color:white; font-family: serif;"><h4>General</h4></div>
			<div class="card-body"  style="background: url('img/banner.jpg'); height: 500px">
				
				<!-- Console for anything which you want to display or any action -->
				<!-- Hint:It may be attendance system display in this portion in future work -->

			</div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="list-group">
			<a class="list-group-item" style="background-color: #FF4747; color: white; text-align: center;">Notifications</a>
			<a href="" class="list-group-item">
			Complaints</a>
			<a href="" class="list-group-item">
			Gmail</a>
			<a href="" class="list-group-item">
			Notice from SuperAdmin</a>
			<a href="" class="list-group-item">
			Administration Notice</a>
		</div>
	</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>