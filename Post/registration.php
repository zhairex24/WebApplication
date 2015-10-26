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
			<form action="register.php" method="POST" class="form-horizontal">
				<div class="form-group">
					<label class="col-sm-2 control-label">First name</label> 
					<div class="col-sm-3" style="padding-top: 8pt;">
						<input type="text" name="fname" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Middle name</label> 
					<div class="col-sm-3" style="padding-top: 7pt;">
						<input type="text" name="mname" class="form-control">
					</div>
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label">Last name</label> 
					<div class="col-sm-3" style="padding-top: 7pt;">
						<input type="text" name="lname" class="form-control">
					</div>
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label">Gender</label>
					Male <input type="radio" name="gender" value="Male">
					Female <input type="radio" name="gender" value="Female">
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
				<label class="col-sm-2 control-label">Program</label>
					<select name="program">
						<option>COURSE</option>
						<option value="AB Broadcasting">AB Broadcasting</option>
						<option value="B.S. Information System">B.S. Information System</option>
						<option value="B.S. Accounting Technology">B.S. Accounting Technology</option>
						<option value="B.S. Accountancy">B.S. Accountancy</option>
						<option value="International Cookery">International Cookery</option>
						<option value="Mass Communication">Mass Communication</option>
						<option value="Nursing Assistant">Nursing Assistant</option>
					</select>
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label">Scholar Status</label>
					Full Scholar <input type="radio" name="scholar_status" value="Full Scholar">
					Partial <input type="radio" name="scholar_status" value="Partial">
					Payee <input type="radio" name="scholar_status" value="Payee">
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label">Address</label>
					<textarea name="address" class="col-sm-3"></textarea>
				</div>
					
				<div class="form-group">
					<input type="submit" value="Submit" class="btn btn-primary col-sm-3" id="submit">
				</div>
			</form>
		</div>
	</body>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
</html>
