<!DOCTYPE html>
<html>
<head>
	<title>Search Doctor Details </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<?php 
include("layout.php");
if (isset($_POST['doc_search'])) {
	$id = filter_input(INPUT_POST, 'search');
	$query = "SELECT * FROM doctor WHERE ID = '$id' ";
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
      <th scope='col'>City</th>
      <th scope='col'>State</th>
      <th scope='col'>Contact</th>
      <th scope='col'>email</th>
      <th scope='col'>Username</th>
      <th scope='col'>Password</th>
    </tr>
  </thead>
  <tbody>";
	while ($row=mysqli_fetch_array($result)) {
	 		$id = $row['ID'];
			$firstn = $row['fname'];
			$lastn = $row['lname'];
			$fatname = $row["fathername"];
			$ct = $row['city'];
			$state = $row['state'];
			$contact = $row['contact'];
			$email = $row['email'];
			$username = $row['username'];
			$password = $row['password'];

			echo "<tr>
			  <td>$id</td>
		      <td>$firstn</td>
		      <td>$lastn</td>
		      <td>$fatname</td>
		      <td>$ct</td>
		      <td>$state</td>
		      <td>$contact</td>
		      <td>$email</td>
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

