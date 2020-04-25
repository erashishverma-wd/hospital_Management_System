<!DOCTYPE html>
<?php 
$conn = new mysqli('localhost','root','','hospital'); ?>
<html>
<head>
	<title>Patient Details</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<?php  
if (isset($_POST['delete_btn'])) {
	$key = $_POST['check'];

	$checking = mysqli_query($conn,"SELECT * FROM patient_details WHERE ID = '$key' ") or die("Data Not Found".mysql_error());
	if (mysqli_num_rows($checking)>0) {
		$result = mysqli_query($conn,"DELETE FROM patient_details WHERE ID = '$key' ");
		echo "<script>alert('Record Deleted Succesfully!!')</script>";
	} else {
		echo "Record Does Not Found";
	}
	
}


?>


	<div class="jumbotron" style="background: url('img/patient.jfif');height: 400px; background-size: cover;">
	</div>
	<hr width="100%">
	<div class="container-fluid">
		<div class="card">
			<div class="card-body" style="background-color: #3A81FF; color: white;">
				<div class="row">
					<div class="col-md-1">
						<a href="doctor_panel.php" style="color: white" class="btn btn-dark">Return</a>
					</div>
					<div class="col-md-4"><h3 style="color: white; font-family: serif;">Patient Details</h3></div>
					<div class="col-md-7">
						<form class="form-group" action="patient_list.php" method="post">
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-6">
									<input type="text" name="search" class="form-control" placeholder="Enter ID">
								</div>
							<div class="col-md-2">
							<input type="submit" name="patient_search" class="btn btn-dark" value="Search"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="card-body" style="background-color: #3A81FF;">
				<table class="table table-hover" style="color: white; font-family: serif;">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Diagnosis</th>
      <th scope="col">Department</th>
      <th scope="col">Bed No</th>
      <th scope="col">Doctor Name</th>
      <th scope="col">City</th>
      <th scope="col">Contact</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Select</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <?php 
  global $conn;
		$display = "SELECT * FROM patient_details";
		$result = mysqli_query($conn,$display);
		while ($row = mysqli_fetch_array($result)) { 

   ?>
  <tbody>
 		<form action="" method="post">
 			<td><?php echo $row['ID'];?></td>
 			<td><?php echo $row['First Name'];?></td>
 			<td><?php echo $row['Last Name'];?></td>
 			<td><?php echo $row["Father's Name"];?></td>
 			<td><?php echo $row['Diagnosis'];?></td>
 			<td><?php echo $row['Department'];?></td>
 			<td><?php echo $row['Bed No'];?></td>
 			<td><?php echo $row['Doctor Name'];?></td>
 			<td><?php echo $row['City'];?></td>
 			<td><?php echo $row['Contact'];?></td>
 			<td><?php echo $row['username'];?></td>
 			<td><?php echo $row['password'];?></td>
 			<td>
 				<input type="checkbox" name="check" value="<?php echo $row['ID']; ?>" required>
 			</td>
 			<td>
 				<input type="submit" name="delete_btn" value="Delete" class="btn btn-danger">
 			</td>
 		</form>
  </tbody>
<?php } ?>
</table>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>