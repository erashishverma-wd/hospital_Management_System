<!DOCTYPE html>
<html>
<head>
  <title>Ambulance Booking</title>
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
    .required{
      color: red;
    }
    p{
      color: red;
    }
  </style>
</head>
<body>
  <div class="card" style="top:20px; height: 95%; width: 40%; left: 30%">
    <div class="card-body">
      <h5>Book An</h5>
      <div class="row">
        <div class="col-md-5">
          <h1 style="color: red;">Ambulance</h1>
        </div>
        <div class="col-md-7">
          <img src="img/amb.jpg" style="height: 40px; width: 40px; border-radius: 60px;">
        </div>
      </div><hr>
  <form class="form-group" method="post" action="">
     <p>* field is required...</p>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>First Name</label>
      <input type="text" name="fname" class="form-control" placeholder="First Name" required>
    </div>
    <div class="form-group col-md-6">
      <label>Last Name</label>
      <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
    </div>
    <div class="form-group col-md-12">
      <label>Contact Number</label>&nbsp<span class="required">*</span>
      <input type="text" class="form-control"placeholder="Contact Number" name="con" required>
    </div>
  </div>
  <div class="form-group">
    <label>Address</label>&nbsp<span class="required">*</span>
    <input type="text" class="form-control" id="inputAddress" name="add" placeholder="1234 Main St" required>
  </div>
  <div class="form-group">
    <label>Locality</label>&nbsp<span class="required">*</span>
    <input type="text" class="form-control"placeholder="Apartment, studio, or floor" required name="locality">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>City</label>&nbsp<span class="required">*</span>
      <input type="text" class="form-control" required name="cty">
    </div>
    <div class="form-group col-md-6">
      <label>State</label>
      <select class="form-control" name="state">
        <option value="NULL">--SELECT--</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
      </select>
    </div>
  </div><br>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <input type="submit" name="amb_btn" class="btn btn-block btn-primary" value="Done">
    </div>
  </div>
</form>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>




<?php
// creating connection(globally)
$conn = new mysqli('localhost','root','','lab');


// Ambulance
if (isset($_POST['amb_btn'])) {

  $first = filter_input(INPUT_POST, 'fname');
  $last = filter_input(INPUT_POST, 'lname');
  $contact = filter_input(INPUT_POST, 'con');
  $add = filter_input(INPUT_POST, 'add');
  $local = filter_input(INPUT_POST, 'locality');
  $city = filter_input(INPUT_POST, 'cty');
  $state = filter_input(INPUT_POST, 'state');
  if ( !empty($first) || !empty($last) || !empty($contact) || !empty($city) || !empty($local) || !empty($add) || !empty($state)) {
    $sql = "INSERT INTO `ambulance`(`fname`, `lname`, `contact`, `address`, `local`, `city`, `state`) VALUES ('$first', '$last', '$contact', '$add', '$local', '$city', '$state')";
    if ($conn->query($sql)) {
      echo "<script>alert('Thank-You! We will contact you soon!')</script>";
      echo "<script>window.open('ambulance.php','_self')</script>";
    } 
    else
    {
      echo "Error".$sql."<br>". $conn->error;
    }
    $conn->close();

  }

}



?>