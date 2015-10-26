<?php
	$fname = $_GET['fname'];
	$mname = $_GET['mname'];
	$lname = $_GET['lname'];
	$gender = $_GET['gender'];
	$month = $_GET['month'];
	$day = $_GET['day'];
	$year = $_GET['year'];
	$program = $_GET['program'];
	$ss = $_GET['scholar_status'];
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
			<form action="registered.php" method="POST" class="form-horizontal">
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
					Male <input type="radio" name="gender" value="<?php echo $gender; ?>" <?php if($gender == "Male") {echo 'checked="checked"'; } ?>>
					Female <input type="radio" name="gender" value="<?php echo $gender; ?>" <?php if($gender == "Female") {echo 'checked="checked"'; } ?>>
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label">Birthday</label>
					<select name="month">
						<option>MONTH</option>
						<option value="<?php echo $month; ?>" <?php if($month == "January") {echo 'selected="selected"'; } ?>>January</option>
						<option value="<?php echo $month; ?>" <?php if($month == "February") {echo 'selected="selected"'; } ?>>February</option>
						<option value="<?php echo $month; ?>" <?php if($month == "March") {echo 'selected="selected"'; } ?>>March</option>
						<option value="<?php echo $month; ?>" <?php if($month == "April") {echo 'selected="selected"'; } ?>>April</option>
						<option value="<?php echo $month; ?>" <?php if($month == "May") {echo 'selected="selected"'; } ?>>May</option>
						<option value="<?php echo $month; ?>" <?php if($month == "June") {echo 'selected="selected"'; } ?>>June</option>
						<option value="<?php echo $month; ?>" <?php if($month == "July") {echo 'selected="selected"'; } ?>>July</option>
						<option value="<?php echo $month; ?>" <?php if($month == "August") {echo 'selected="selected"'; } ?>>August</option>
						<option value="<?php echo $month; ?>" <?php if($month == "September") {echo 'selected="selected"'; } ?>>September</option>
						<option value="<?php echo $month; ?>" <?php if($month == "October") {echo 'selected="selected"'; } ?>>October</option>
						<option value="<?php echo $month; ?>" <?php if($month == "November") {echo 'selected="selected"'; } ?>>November</option>
						<option value="<?php echo $month; ?>" <?php if($month == "December") {echo 'selected="selected"'; } ?>>December</option>
					</select>
					<select name="day">
							<option>DAY</option>						
						<?php for($i=1; $i<=31; $i++): ?>
							<option value="<?php echo $day; ?>" <?php if($day == "$i") {echo 'selected="selected"'; } ?>> <?php echo $i; ?> </option>
						<?php endfor; ?>		
					</select>
					<select name="year">
							<option>YEAR</option>
						<?php for($i=1990; $i<=2060; $i++): ?>
							<option value="<?php echo $year; ?>" <?php if($year == "$i") {echo 'selected="selected"'; } ?>> <?php echo $i; ?> </option>
						<?php endfor; ?>		
					</select>
				</div>
				
				
				<div class="form-group">
				<label class="col-sm-2 control-label">Program</label>
					<select name="program">
						<option>COURSE</option>
						<option value="<?php echo $program; ?>" <?php if($program == "AB Broadcasting") {echo 'selected="selected"'; } ?>>AB Broadcasting</option>
						<option value="<?php echo $program; ?>" <?php if($program == "B.S. Information System") {echo 'selected="selected"'; } ?>>B.S. Information System</option>
						<option value="<?php echo $program; ?>" <?php if($program == "B.S. Accounting Technology") {echo 'selected="selected"'; } ?>>B.S. Accounting Technology</option>
						<option value="<?php echo $program; ?>" <?php if($program == "B.S. Accountancy") {echo 'selected="selected"'; } ?>>B.S. Accountancy</option>
						<option value="<?php echo $program; ?>" <?php if($program == "International Cookery") {echo 'selected="selected"'; } ?>>International Cookery</option>
						<option value="<?php echo $program; ?>" <?php if($program == "Mass Communication") {echo 'selected="selected"'; } ?>>Mass Communication</option>
						<option value="<?php echo $program; ?>" <?php if($program == "Nursing Assistant") {echo 'selected="selected"'; } ?>>Nursing Assistant</option>
					</select>
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label">Scholar Status</label>
					Full Scholar <input type="radio" name="scholar_status" value="<?php echo $ss; ?>" <?php if($ss == "Full Scholar") {echo 'checked="checked"'; } ?>>
					Partial <input type="radio" name="scholar_status" value="<?php echo $ss; ?>" <?php if($ss == "Partial") {echo 'checked="checked"'; } ?>>
					Payee <input type="radio" name="scholar_status" value="<?php echo $ss; ?>" <?php if($ss == "Payee") {echo 'checked="checked"'; } ?>>
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label">Address</label>
					<textarea name="address" class="col-sm-3"></textarea>
				</div>

				<div class="form-group">
					<input type="submit" value="Proceed to the next step" class="btn btn-success col-sm-2" id="submit">
					<a href="step5.php" class="btn btn-primary col-xs-1" id="back">Back<a/>
				</div>
			</form>
		</div>
	</body>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
</html>
