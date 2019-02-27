<?php include('doc-server.php') ?>
<html>
<head>
	<title>THe Pearl Hospital-Doctor login</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/scrolling-nav.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" keywords="hospital, pearl">
	<style type="text/css">
		body{
			background-image: url(images/service.jpeg);
			background-size: 200%;
			background-repeat: no-repeat; 
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="text-color:white">
		<div class="container-fluid">
			<div class="nav-header">
					<img class="navbar-brand" src="img/logo2.png" width="60px" ><a href="#" class="navbar-brand">
						<p style="font-size:15px">THE PEARL <br> HOSPITAL</p></a>
				<ul class="nav navbar-nav ">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN
						<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="doc-login.php">As doctor</a></li>
								<li><a href="pat-login.php">As patient</a></li>
							</ul>
					</li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">SIGN UP 
						<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="doc-signup.php">As doctor</a></li>
								<li><a href="pat-signup.php">As patient</a></li>
							</ul>
					</li>
					<li><a class="active" href="Home.php">HOME</a></li>
					<li> <a class="active" href="About-Us.php">ABOUT US</a> </li>
					<li><a class="active" href="Contact-Us.php">CONTACT US</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<br>
	<br>
	<br>
	<fieldset class="text-center well well-lg" style="margin-right:35%; margin-left:35%">
		<img src="img/doct3.jpeg" width="75px" class="img-circle" height="75px" style=" margin-left:42%; margin-right:48%;">
		<?php include('doc-errors.php'); ?>
		<form method="POST" action="doc-login.php">
			<legend><b>Log In</b></legend>
			<label>
				<span class="glyphicon glyphicon-user"></span><p>Username:</p>
				<input type="text" name="Username" placeholder="Enter Username">
			</label>
			<br>
			<label>
			<span class="glyphicon glyphicon-asterisk"></span><p>Password:</p>
			<input type="password" name="password" placeholder="Enter Password">
			</label>
			<br>
			<input class="btn btn-success" type="submit" name="logbtn" value="Login">
			<a class="btn btn-warning" href="doc-signup.php">Don't have an account?</a>
		</form>
	</fieldset>
</body>
</html>