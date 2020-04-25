<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<!-- navbar -->
		<nav class="navbar navbar-dark bg-dark">
		<span class="navbar-brand mb-0 h1"><h5 style="color: white; font-family: serif;">SSH Super Admin</h5></span>
</nav>
	<div class="jumbotron" style="background: url('img/benner.jpg');height: 400px; background-size: cover;">
	</div>
<hr width="100%">
<div class="container-fluid">
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
			<a class="list-group-item" style="background-color: #3A81FF; color: white; text-align: center;">Profile</a>
			<a href="" class="list-group-item"><img src="img/cog.png">&nbsp Edit Profile </a>
			<a href="change_admin.php" class="list-group-item"><img src="img/pencil.png">&nbsp
			Change Password</a>
			<a href="super.php" class="list-group-item"><img src="img/logout.png">&nbspLog Out
			</a>
		</div>
		<hr>
		<div class="list-group">
			<a class="list-group-item"  style="background-color: #3A81FF; color: white; text-align: center;">Categories</a>
			<a href="manager_details.php" class="list-group-item"><img src="img/user.svg" style="height: 20px; width: 25px;">&nbspManager</a>
			<a href="doctor_list.php" class="list-group-item"><img src="img/details.png" style="height: 20px; width: 20px;">&nbsp
			Doctor's Info</a>
			<a href="patientdetails.php" class="list-group-item"><img src="img/details.png" style="height: 20px; width: 20px;">&nbsp
			Patients Info</a>
			<a href="staff_details_admin.php" class="list-group-item"><img src="img/users.svg" style="height: 20px; width: 25px;">&nbspStaff Info</a>
			<a href="schedule.php" class="list-group-item"><img src="img/schedule.png" style="height: 20px; width: 25px;">&nbspOPD Schedule</a><!-- Created by: Ashish Verma -->
			<a href="schedule.php" class="list-group-item"><img src="img/schedule.png" style="height: 20px; width: 25px;">&nbspPaid OPD Schedule</a>
			<a href="module/index.php" class="list-group-item"><img src="img/salary.png" style="height: 25px; width: 25px;">&nbspSalary</a>
			<a href="attendance/attendance_type.php" class="list-group-item"><img src="img/attendance.png" style="height: 25px; width: 25px;">&nbspAttendance</a>
			<a href="doctor.php" class="list-group-item"><img src="img/add_circle.svg" style="height: 20px; width: 25px;">&nbspAdd Docotor</a>
			<a href="manager.php" class="list-group-item"><img src="img/add_circle.svg" style="height: 20px; width: 25px;">&nbspAdd Manager</a>
			<a href="staff_super.php" class="list-group-item"><img src="img/add_circle.svg" style="height: 20px; width: 25px;">&nbspAdd Staff</a>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body" style="background-color: #3A81FF; color:white;"><h5>General</h5></div>
			<div class="card-body" style="background: url('img/benner.jpg'); height: 555px; background-size: cover;">
			
			<!-- Do whatever you want here to show in the console -->

			</div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="list-group">
			<a class="list-group-item" style="background-color: #3A81FF; color: white; text-align: center;"><img src="img/bell.png"> Notifications</a>
			<a href="" class="list-group-item"><img src="img/chat.png">&nbsp
			Complaints</a>
			<a href="" class="list-group-item"><img src="img/envelope.png">&nbsp
			Gmail</a>
			<a href="" class="list-group-item"><img src="img/envelope.png">&nbsp
			Administration</a>
		</div>
	</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
