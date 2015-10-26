<?php
	$firstname = $_POST['fname'];
	$middlename = $_POST['mname'];
	$lastname = $_POST['lname'];
	$gender = $_POST['gender'];
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$program = $_POST['program'];
	$scholar_status = $_POST['scholar_status'];
	$address = $_POST['address'];
?>

<!DOCTYPE html>
<html>
	<title>List of Register</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<body>
		<div class="navbar navbar-inverse navbar-static-top" >
			<h1>Succesfully Registered</h1>
		</div>	

		<div class="jumbotron">
			Full name: <strong><?php echo $firstname . " " . $middlename . " " . $lastname; ?></strong> </br>
			Gender: <strong><?php echo $gender; ?></strong> </br>
			Birthday: <strong><?php echo $month . " " . $day . ", " . $year; ?></strong> </br>
			Program: <strong><?php echo $program; ?></strong> </br>
			Scholar Status: <strong><?php echo $scholar_status; ?></strong> </br>
			Address: <strong><?php echo $address; ?></strong> </br>
		</div>

	</body>
</html>
