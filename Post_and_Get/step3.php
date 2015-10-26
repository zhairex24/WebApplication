<?php
	$fname = $_GET['fname'];
	$mname = $_GET['mname'];
	$lname = $_GET['lname'];
	$gender =$_GET['gender'];
?>


<!DOCTYPE html>
<html>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<body>
		<div class="navbar navbar-inverse navbar-static-top" >
			<h1>Registration Form</h1>
		</div>

		<div class="jumbotron">
			<form action="step4.php" method="GET" class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-2 control-label">First name</label> 
					<div class="col-sm-3" style="padding-top: 8pt;">
						<input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Middle name</label> 
					<div class="col-sm-3" style="padding-top: 7pt;">
						<input type="text" name="mname" class="form-control" value="<?php echo $mname; ?>">
					</div>
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label">Last name</label> 
					<div class="col-sm-3" style="padding-top: 7pt;">
						<input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>">
					</div>
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label">Gender</label>
					Male <input  type="radio" name="gender" value="<?php echo $gender; ?>" <?php if($gender == "Male") {echo 'checked="checked"'; } ?>>
					Female <input type="radio" name="gender" value="<?php echo $gender; ?>" <?php if($gender == "Female") {echo 'checked="checked"'; } ?>>
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label">Birthday</label>
					<select name="month">
						<option>MONTH</option>
						<option value="January">January</option>
						<option value="February">February</option>
						<option value="March">March</option>
						<option value="April">April</option>
						<option value="May">May</option>
						<option value="June">June</option>
						<option value="July">July</option>
						<option value="August">August</option>
						<option value="September">September</option>
						<option value="October">October</option>
						<option value="November">November</option>
						<option value="December">December</option>
					</select>
					<select name="day">
							<option>DAY</option>						
						<?php for($i=1; $i<=31; $i++): ?>
							<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
						<?php endfor; ?>		
					</select>
					<select name="year">
							<option>YEAR</option>
						<?php for($i=1990; $i<=2060; $i++): ?>
							<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
						<?php endfor; ?>		
					</select>
				</div>

				<div class="form-group">
					<input type="submit" value="Proceed to the next step" class="btn btn-success col-sm-2" id="submit">
					<a href="step2.php" class="btn btn-primary col-xs-1" id="back">Back<a/>				
				</div>
			</form>
		</div>
	</body>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
</html>
