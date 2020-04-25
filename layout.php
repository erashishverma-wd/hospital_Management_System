<?php
// creating connection(globally)
$conn = new mysqli('localhost','root','','hospital');

// for super admin login
if (isset($_POST['sup_login']))
{
	$username = filter_input(INPUT_POST, 'user');
	$password = filter_input(INPUT_POST, 'pass');
	if (!empty($username)) {
		if (!empty($password)) {
			$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password' ";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) == 1) {
				header("Location:adminpanel.php");
		
			} else {
				echo "Unauthorised Super Admin Login";
			}
			
		} else {
			echo "Please enter password";
			die();
		}
		
	} else {
		echo "Please enter username";
		die();
	}
}

// for manager login
if (isset($_POST['adm_login']))
{
	$username = filter_input(INPUT_POST, 'user');
	$password = filter_input(INPUT_POST, 'pass');
	if (!empty($username)) {
		if (!empty($password)) {
			$sql = "SELECT * FROM manager WHERE username = '$username' AND password = '$password' ";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) == 1) {
				header("Location:manager_panel.php");
		
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
}

// form input from website
if (isset($_POST['web_btn'])) {

	$name = filter_input(INPUT_POST, 'name');
	$email = filter_input(INPUT_POST, 'email');
	$sub = filter_input(INPUT_POST, 'subject');
	$msg = filter_input(INPUT_POST, 'message');
	if (!empty($name) || !empty($email) || !empty($msg)) {
		$sql = "INSERT INTO `query`(`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$sub', '$msg')";
		if ($conn->query($sql)) {
			echo "<script>alert('Your query is submitted successfully')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}


// patient_registration
if (isset($_POST['reg_btn'])) {

	$id = filter_input(INPUT_POST, 'id');
	$first = filter_input(INPUT_POST, 'fname');
	$last = filter_input(INPUT_POST, 'lname');
	$father = $_POST['ftname'];
	$diagnosis = filter_input(INPUT_POST, 'diag');
	$department = filter_input(INPUT_POST, 'dep');
	$bd = filter_input(INPUT_POST, 'bed');
	$doctor = filter_input(INPUT_POST, 'docname');
	$cty = filter_input(INPUT_POST, 'city');
	$state = filter_input(INPUT_POST, 'state');
	$contact = filter_input(INPUT_POST, 'con');
	$email = filter_input(INPUT_POST, 'mail');;
	$username = filter_input(INPUT_POST, 'reguser');
	$password = filter_input(INPUT_POST, 'regpass');
	if (!empty($id) || !empty($first) || !empty($last) || !empty($father) || !empty($bd) || !empty($contact) || !empty($username) || !empty($password)) {
		$sql = "INSERT INTO `patient_details`(`id`, `First Name`, `Last Name`, `Father's Name`, `Diagnosis`, `Department`, `Bed No`, `Doctor Name`, `City`, `State`, `Contact`, `email`, `username`, `password`)VALUES ('$id', '$first', '$last','$father','$diagnosis', '$department', '$bd', '$doctor', '$cty', '$state', '$contact', '$email', '$username', '$password')";
		if ($conn->query($sql)) {
			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('registration.php','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();
	}

	}

// Doctor_registration
if (isset($_POST['doc_btn'])) {

	$id = filter_input(INPUT_POST, 'id');
	$first = filter_input(INPUT_POST, 'fname');
	$last = filter_input(INPUT_POST, 'lname');
	$father = $_POST['ftname'];
	$cty = filter_input(INPUT_POST, 'city');
	$state = filter_input(INPUT_POST, 'state');
	$contact = filter_input(INPUT_POST, 'con');
	$email = filter_input(INPUT_POST, 'mail');;
	$username = filter_input(INPUT_POST, 'docuser');
	$password = filter_input(INPUT_POST, 'docpass');
	if ( !empty($id) || !empty($first) || !empty($last) || !empty($father) || !empty($contact) || !empty($username) || !empty($password)) {
		$sql = "INSERT INTO `doctor`(`ID`, `fname`, `lname`, `fathername`, `city`, `state`, `contact`, `email`, `username`, `password`) VALUES ('$id','$first', '$last', '$father', '$cty', '$state', '$contact', '$email', '$username', '$password')";
		if ($conn->query($sql)) {
			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('doctor.php','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}


// doctor login
if (isset($_POST['doc_login']))
{
	$username = filter_input(INPUT_POST, 'user');
	$password = filter_input(INPUT_POST, 'pass');
	if (!empty($username)) {
		if (!empty($password)) {
			$sql = "SELECT * FROM doctor WHERE username = '$username' AND password = '$password' ";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) == 1) {
				header("Location:doctor_panel.php");
		
			} else {
				echo "Unauthorised Doctor Login";
			}
			
		} else {
			echo "Please enter password";
			die();
		}
		
	} else {
		echo "Please enter username";
		die();
	}

// end of login braces
}


// manager registration
if (isset($_POST['mn_btn'])) {

	$first = filter_input(INPUT_POST, 'fname');
	$last = filter_input(INPUT_POST, 'lname');
	$father = $_POST['ftname'];
	$cty = filter_input(INPUT_POST, 'city');
	$state = filter_input(INPUT_POST, 'state');
	$contact = filter_input(INPUT_POST, 'con');
	$email = filter_input(INPUT_POST, 'mail');;
	$username = filter_input(INPUT_POST, 'reguser');
	$password = filter_input(INPUT_POST, 'regpass');
	if (!empty($first) || !empty($last) || !empty($father) || !empty($contact) || !empty($username) || !empty($password)) {
		$sql = "INSERT INTO `manager`(`fname`, `lname`, `fathername`, `city`, `state`, `contact`, `email`, `username`, `password`) VALUES ('$first', '$last', '$father', '$cty', '$state', '$contact', '$email', '$username', '$password')";
		if ($conn->query($sql)) {
			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('manager.php','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}

// patient details function
function get_patient_details(){
		global $conn;
		$display = "SELECT * FROM patient_details";
		$result = mysqli_query($conn,$display);
		while ($row = mysqli_fetch_array($result)) {
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
	}




// patient appointmrnt
if (isset($_POST['app_btn'])) {

	$full = filter_input(INPUT_POST, 'fname');
	$fath = filter_input(INPUT_POST, 'ftname');
	$doc = filter_input(INPUT_POST, 'docname');
	$cty = filter_input(INPUT_POST, 'city');
	$date = filter_input(INPUT_POST, 'date');
	$contact = filter_input(INPUT_POST, 'con');
	if (!empty($full) || !empty($fath) || !empty($doc) || !empty($contact) || !empty($date)) {
		$sql = "INSERT INTO `appointment`(`fulname`, `fathername`, `doctorname`, `city`, `date`, `contact`) VALUES ('$full', '$fath', '$doc', '$cty', '$date', '$contact')";
		if ($conn->query($sql)) {
			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('appointment.php','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}



// doctor's details function
function get_doctor_details(){
		global $conn;
		$display = "SELECT * FROM doctor";
		$result = mysqli_query($conn,$display);
		while ($row = mysqli_fetch_array($result)) {
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
	}

// manager's details function
function get_manager_details(){
		global $conn;
		$display = "SELECT * FROM manager";
		$result = mysqli_query($conn,$display);
		while ($row = mysqli_fetch_array($result)) {
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
	}

// start of function

	function get_appointment_details(){
		global $conn;
		$display = "SELECT * FROM appointment";
		$result = mysqli_query($conn,$display);
		while ($row = mysqli_fetch_array($result)) {
			$full = $row['fulname'];
			$fathername = $row['fathername'];
			$ct = $row['city'];
			$date = $row['date'];
			$contact = $row['contact'];
			echo "<tr>
		      <td>$full</td>
		      <td>$fathername</td>
		      <td>$ct</td>
		      <td>$date</td>
		      <td>$contact</td>
		    </tr>";
		}
	}
// end of function

// Staff Registration
if (isset($_POST['staff_btn'])) {

	$id = filter_input(INPUT_POST, 'id');
	$first = filter_input(INPUT_POST, 'fname');
	$last = filter_input(INPUT_POST, 'lname');
	$father = $_POST['ftname'];
	$cty = filter_input(INPUT_POST, 'city');
	$state = filter_input(INPUT_POST, 'state');
	$email = filter_input(INPUT_POST, 'email');
	$contact = filter_input(INPUT_POST, 'con');
	if (!empty($first) || !empty($last) || !empty($father) || !empty($contact) || !empty($id)) {
		$sql = "INSERT INTO `staff`(`ID`, `firstname`, `lastname`, `fathername`, `city`, `state`, `email`, `contact`) VALUES ('$id','$first', '$last', '$father', '$cty', '$state', '$email', '$contact')";
		if ($conn->query($sql)) {
			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('staff.php','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}

if (isset($_POST['staff_btns'])) {

	$id = filter_input(INPUT_POST, 'id');
	$first = filter_input(INPUT_POST, 'fname');
	$last = filter_input(INPUT_POST, 'l`name');
	$father = $_POST['ftname'];
	$cty = filter_input(INPUT_POST, 'city');
	$state = filter_input(INPUT_POST, 'state');
	$email = filter_input(INPUT_POST, 'email');
	$contact = filter_input(INPUT_POST, 'con');
	if (!empty($first) || !empty($last) || !empty($father) || !empty($contact) || !empty($id)) {
		$sql = "INSERT INTO `staff`(`ID`, `firstname`, `lastname`, `fathername`, `city`, `state`, `email`, `contact`) VALUES ('$id','$first', '$last', '$father', '$cty', '$state', '$email', '$contact')";
		if ($conn->query($sql)) {
			echo "<script>alert('New record is submitted successfully')</script>";
			echo "<script>window.open('Staff_super.php','_self')</script>";
		} 
		else
		{
			echo "Error".$sql."<br>". $conn->error;
		}
		$conn->close();

	}
}

// Change password Section

// for super adm
if (isset($_POST['change_btn'])) {

	$old = filter_input(INPUT_POST, 'old');
	$new = filter_input(INPUT_POST, 'new');
	$rnew = filter_input(INPUT_POST, 'rnew');

	if (!empty($new)) {
		if (!empty($rnew)) {
			if ($new == $rnew) {
				$sql = "UPDATE `login` SET `password`='$rnew' WHERE password = '$old' ";
				if ($conn->query($sql)) {
			echo "<script>alert('Password is Changed Successfully')</script>";
			echo "<script>window.open('adminpanel.php','_self')</script>";
		} 
		else
		{
			echo "Error<br>".$sql."<br>". $conn->error;
		}
		$conn->close();
			} else {
				echo "Your New Password Doesn't Match";
			}
			
		} else {
			echo "Please Re-enter Your New password";
		}
		
	} else {
		echo "Please Enter Your New password";
		die();
	}
	
}

// for manager

if (isset($_POST['change_btn_mng'])) {

	$old = filter_input(INPUT_POST, 'old');
	$new = filter_input(INPUT_POST, 'new');
	$rnew = filter_input(INPUT_POST, 'rnew');

	if (!empty($new)) {
		if (!empty($rnew)) {
			if ($new == $rnew) {
				$sql = "UPDATE `manager` SET `password`='$rnew' WHERE password = '$old' ";
				if ($conn->query($sql)) {
			echo "<script>alert('Password is Changed Successfully')</script>";
			echo "<script>window.open('manager_panel.php','_self')</script>";
		} 
		else
		{
			echo "Error<br>".$sql."<br>". $conn->error;
		}
		$conn->close();
			} else {
				echo "Your New Password Doesn't Match";
			}
			
		} else {
			echo "Please Re-enter Your New password";
		}
		
	} else {
		echo "Please Enter Your New password";
		die();
	}
	
}

// for doctor

if (isset($_POST['change_btn_doc'])) {

	$old = filter_input(INPUT_POST, 'old');
	$new = filter_input(INPUT_POST, 'new');
	$rnew = filter_input(INPUT_POST, 'rnew');

	if (!empty($new)) {
		if (!empty($rnew)) {
			if ($new == $rnew) {
				$sql = "UPDATE `doctor` SET `password`='$rnew' WHERE password = '$old' ";
				if ($conn->query($sql)) {
			echo "<script>alert('Password is Changed Successfully')</script>";
			echo "<script>window.open('doctor_panel.php','_self')</script>";
		} 
		else
		{
			echo "Error<br>".$sql."<br>". $conn->error;
		}
		$conn->close();
			} else {
				echo "Your New Password Doesn't Match";
			}
			
		} else {
			echo "Please Re-enter Your New password";
		}
		
	} else {
		echo "Please Enter Your New password";
		die();
	}
	
}
// End

// Forgot password section
if (isset($_POST['forgot_btn'])) {

	$mail = filter_input(INPUT_POST, 'email');
	$new = filter_input(INPUT_POST, 'new');
	$rnew = filter_input(INPUT_POST, 'rnew');

	if (!empty($new)) {
		if (!empty($rnew)) {
			if ($new == $rnew) {
				$sql = "UPDATE `login` SET `password`='$rnew' WHERE email = 'email' ";
				if ($conn->query($sql)) {
			echo "<script>alert('Password is Changed Successfully')</script>";
			echo "<script>window.open('super.php','_self')</script>";
		} 
		else
		{
			echo "Error<br>".$sql."<br>". $conn->error;
		}
		$conn->close();
			} else {
				echo "Your New Password Doesn't Match";
			}
			
		} else {
			echo "Please Re-enter Your New password";
		}
		
	} else {
		echo "Please Enter Your New password";
		die();
	}
	
}

// for manager
if (isset($_POST['forgot_btn_man'])) {

	$mail = filter_input(INPUT_POST, 'email');
	$new = filter_input(INPUT_POST, 'new');
	$rnew = filter_input(INPUT_POST, 'rnew');

	if (!empty($new)) {
		if (!empty($rnew)) {
			if ($new == $rnew) {
				$sql = "UPDATE `manager` SET `password`='$rnew' WHERE email = '$mail' ";
				if ($conn->query($sql)) {
			echo "<script>alert('Password is Changed Successfully')</script>";
			echo "<script>window.open('admin_login.php','_self')</script>";
		} 
		else
		{
			echo "Error<br>".$sql."<br>". $conn->error;
		}
		$conn->close();
			} else {
				echo "Your New Password Doesn't Match";
			}
			
		} else {
			echo "Please Re-enter Your New password";
		}
		
	} else {
		echo "Please Enter Your New password";
		die();
	}
	
}

// for doctor
if (isset($_POST['forgot_btn_doc'])) {

	$mail = filter_input(INPUT_POST, 'email');
	$new = filter_input(INPUT_POST, 'new');
	$rnew = filter_input(INPUT_POST, 'rnew');

	if (!empty($new)) {
		if (!empty($rnew)) {
			if ($new == $rnew) {
				$sql = "UPDATE `doctor` SET `password`='$rnew' WHERE email = '$mail' ";
				if ($conn->query($sql)) {
			echo "<script>alert('Password is Changed Successfully')</script>";
			echo "<script>window.open('doc_login.php','_self')</script>";
		} 
		else
		{
			echo "Error<br>".$sql."<br>". $conn->error;
		}
		$conn->close();
			} else {
				echo "Your New Password Doesn't Match";
			}
			
		} else {
			echo "Please Re-enter Your New password";
		}
		
	} else {
		echo "Please Enter Your New password";
		die();
	}
	
}



?>