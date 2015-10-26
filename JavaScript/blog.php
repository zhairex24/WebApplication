<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/signIn.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/getIndex.js"></script>
</head>
<body>
	<div>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php" id="rims">Create Your Own Blog</a>
				</div>
			</div>
		</nav>
	</div>

	<div>
		<form class="form-signin">
		<h2 id="signIn" class="form-signin-heading"> Create Blog</h2>
		<input type="text" id="input_fname" class="form-control" placeholder="First name">
		<input type="text" id="input_mname" class="form-control" placeholder="Middle name">
		<input type="text" id="input_lname" class="form-control" placeholder="Last name">	
		<textarea id="input_content" class="form-control" placeholder="Add a content.."></textarea>
		</form>
	<button id="create" class="btn btn-lg btn-primary btn-block" onclick="showInfo()">Create Now!</button>
	</div>

	<div class="panel panel-success">
		<div class="panel-header">
			<h3 class="panel-title">Panel Title</h3>
		</div>
		<div class="panel-body">
			<article class="info">
				<h3 id="first_name"></h3>
				<h3 id="middle_name"></h3>
				<h3 id="last_name"></h3>
				<h3 id="content"></h3>
			</article>
		</div>
	</div>



</body>
</html>