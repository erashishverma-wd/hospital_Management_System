<!DOCTYPE html>
<html>
<head>
	<title>Search Patient Details </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<?php 
include("layout.php");
if (isset($_POST['patient_search'])) {
	$id = filter_input(INPUT_POST, 'search');
	$query = "SELECT * FROM patient_details WHERE ID = '$id' ";
	$result = mysqli_query($conn,$query);
	echo "
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
      <th scope='col'>Username</th>
      <th scope='col'>Password</th>
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
			$username = $row['username'];
			$password = $row['password'];

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
		      <td>$username</td>
		      <td>$password</td>
		    </tr>";
	 } 
	 echo "</tbody></table></div>";
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

