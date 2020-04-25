<!DOCTYPE html>
<?php include("layout.php") ?>
<html>
<head>
	<title>Doctor Panel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		img{
			height: 20px;
			width: 20px;
		}
	</style>
</head>
<body style="background-color: #DEFF90;">
	<!-- navbar -->
		<nav class="navbar navbar-dark bg-dark">
		<span class="navbar-brand mb-0 h1"><h5 style="color: white; font-family: serif;">Doctor Panel</h5></span>
</nav>
	<div class="jumbotron" style="background: url('img/banner.jpg');height: 300px; background-size: cover;">
	</div>
	<hr width="100%">

<div class="container-fluid">
<div class="row">
	<div class="col-md-2">
		<div class="list-group">
			<a class="list-group-item" style="background-color: #3A81FF; color: black; text-align: center; ">Profile</a>
			<a href="" class="list-group-item"><img src="img/cog.png">&nbspEdit Profile</a>
			<a href="attendance/doctor_att.php" class="list-group-item"><img src="img/attendance.png">&nbspAttendance</a>
			<a href="doctor_change.php" class="list-group-item"><img src="img/pencil.png">&nbsp
			Change Password</a>
			<a href="doc_login.php" class="list-group-item"><img src="img/logout.png">&nbsp
			Log Out</a>
		</div>
		<hr>
		<div class="list-group">
			<a class="list-group-item" style="background-color: #3A81FF; color: black; text-align: center;">Categories</a>
			<a href="patientdetails2.php" class="list-group-item"><img src="img/picon.png">
			&nbspPatients Info</a>
			<a href="schedule.php" class="list-group-item"><img src="img/icon1.jpg">&nbspOPD Schedule</a>
			<a href="schedule.php" class="list-group-item"><img src="img/salary.png">&nbsp&nbspPaid OPD Schedule</a>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body" style="background-color: #3A81FF; color:black;"></div>
			<div class="card-body" id="here">
			<!-- details -->


				<div class="container-fluid">
		<div class="card">
			<div class="card-body" style="background-color: #3A81FF; color: white;">
				<div class="col-md-4"><h3 style="color: black; font-family: serif;">Appointment Details</h3></div>
			</div>
			<div class="card-body" style="background-color: #3A81FF;">
				<table class="table table-hover" style="color: white; font-family: serif;">
  <thead style="color: black;">
    <tr>
      <th scope="col">Full Name</th>
      <th scope="col">Father's Name</th>
      <th scope="col">City</th>
      <th scope="col">Date</th>
      <th scope="col">Contact</th>
    </tr>
  </thead>
  <tbody>
  	  <?php get_appointment_details();  ?>
  </tbody>
</table>
		</div>
	</div>
</div>
				<!-- details -->

			</div>
		</div>
	</div>
	<div class="col-md-2">
		<div class="list-group">
			<a class="list-group-item" style="background-color: #3A81FF; color: black; text-align: center;"><img src="img/bell.png">&nbsp&nbspNotifications</a>
			<a href="" class="list-group-item"><img src="img/envelope.png">
			Gmail</a>
			<a href="" class="list-group-item"><img src="img/envelope.png">
			Admin Notice</a>
		</div>
	</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>