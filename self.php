<!DOCTYPE html>
<html>
<head>
	<title>Patient self Info</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: gray;">

<?php

$conn = new mysqli('localhost','root','','hospital');

if (isset($_POST['btn_login']))
{
	$username = filter_input(INPUT_POST, 'user');
	$password = filter_input(INPUT_POST, 'pass');
	if (!empty($username)) {
		if (!empty($password)) {
			$sql = "SELECT * FROM patient_details WHERE username = '$username' AND password = '$password' ";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) == 1) {
				echo "
		<div class='card' >
		<nav class='navbar navbar-dark bg-dark'>
		<span class='navbar-brand mb-0 h1'><h5 style='color: white; font-family: serif;'>Patient Information</h5></span>
</nav>
		<img src = 'img/banner.jpg' style='height:500px;'></img>
	<div class='card-body' style='background-color: #3A81FF;'>
				<table class='table table-hover' style=' color:white; font-family: serif;'>
  <thead>
    <tr>
      <th scope='col'>ID</th>
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>Father's Name</th>
      <th scope='col'>Diagnosis</th>
      <th scope='col'>Department</th>
      <th scope='col'>Bed No</th>
      <th scope='col'>Doctor Name</th>
      <th scope='col'>City</th>
      <th scope='col'>Contact</th>
    </tr>
  </thead>
  <tbody>";
	while ($row=mysqli_fetch_array($result)) {
	 		$id = $row['ID'];
			$firstn = $row['First Name'];
			$lastn = $row['Last Name'];
			$fatname = $row["Father's Name"];
			$diagnosis = $row['Diagnosis'];
			$dep = $row['Department'];
			$bedno = $row['Bed No'];
			$dname = $row['Doctor Name'];
			$ct = $row['City'];
			$contact = $row['Contact'];
			echo "<tr>
			  <td>$id</td>
		      <td>$firstn</td>
		      <td>$lastn</td>
		      <td>$fatname</td>
		      <td>$diagnosis</td>
		      <td>$dep</td>
		      <td>$bedno</td>
		      <td>$dname</td>
		      <td>$ct</td>
		      <td>$contact</td>
		    </tr>";
	 } 
	 echo "</tbody></table></div></div>";
}
			} else {
				echo "Unauthorised Login";
			}
			
		} else {
			echo "Please enter password";
			die();
		}
		
	} else {
		echo "Please enter username";
		die();
	}
	

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

