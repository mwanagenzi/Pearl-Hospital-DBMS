<?php include('pat-server.php') ?>
<html>
<head>
	<title>The Pearl Hospital-Patient login</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/scrolling-nav.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" keywords="hospital, pearl">
	<style type="text/css">
	body{
		background-image: url(img2/equip.jpeg);
		background-size:100%;
		background-repeat: no-repeat;
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
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
	<fieldset class="text-center well well-lg1" style="margin-right:15%; margin-left:15%">
		<img src="img1/pat4.jpeg" width="150px" class="img-circle" height="150px" style=" margin-left:42%; margin-right:48%;">
		<form method="POST" action="pat-login.php">
			<?php include('pat-errors.php'); ?>
			<legend>Patient log in</legend>
			<label>
				<span class="glyphicon glyphicon-user"></span><p>Username:</p>
				<input type="text" name="Username" id="Username" placeholder="Enter Username" required="">
			</label>
			<br>
			<label>
			<span class="glyphicon glyphicon-asterisk"></span><p>Password:</p>
			<input type="password" name="password" id="password" placeholder="Enter Password" required="">
			</label>
			<br>
			<input type="submit" name="logbtn" value="Login" class="btn btn-success">
			
			<button class="btn btn-warning" href="pat-signup.php">Don't have an account?</button>
		</form>
	</fieldset>
</body>
</html>