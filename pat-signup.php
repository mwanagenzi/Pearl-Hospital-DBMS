<?php include('pat-server.php') ?>
<html>
<head>
	<title>The Pearl Hospital-Patient signup</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/scrolling-nav.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" keywords="hospital, pearl">
	<style type="text/css">
		body{
			background-image: url(images/home1.jpeg);
			background-size: 125%;
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
		<div id="section1">
		<fieldset style="margin-left:10%; margin-right:10% ;margin-top:1%" class="well-lg1">
			<img src="images/docpat.jpeg" width="150px" class="img-circle" height="150px" style=" margin-left:42%; margin-right:48%;">
			<form class="text-center" method="POST" action="pat-signup.php">
				<?php include('pat-errors.php'); ?>
				<legend><b>Sign Up</b></legend>
				<div class="col-sm-4">
				<label>
					<p>First Name:</p>
					<input class="form-control" type="text" name="Firstname" placeholder="Enter First Name" required=""> 
				</label>
				<br>
				<label>
					<p >Second Name:</p>
					<input class="form-control" type="text" name="Secondname" placeholder="Enter Second Name" required=""> 
				</label>
				<br>
				<label>
					<p >Surname:</p>
					<input class="form-control" type="text" name="Surname" placeholder="Enter Surname" required=""> 
				</label>
				<br>
				<label>
					<p >E-mail address:</p>
					<input  class="form-control"type="email" name="Email" placeholder="Enter E-mail address" required=""> 
				</label>
				<br>
				</div>
				<div class="col-sm-4">
				<label>
						<p >Date Of Birth:</p>
						<input class="form-control" type="date" name="dob" placeholder="yyyy-mm-dd" required=""> 
					</label>
					<br>
				<label>
						<p>Gender:</p>
						<select class="form-control" name="gender" required="">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Other</option>
						</select>
					</label>
				<br>
				<label>
					<p >Telephone Number:</p>
					<input class="form-control" type="integer" name="telephonenumber" placeholder="+(254)" required=""> 
				</label>
				<br>
				<label>
					<p>Location:</p>
					<input class="form-control" type="text" name="location" placeholder="Enter Location" required=""> 
				</label>
				<br>
			</div>
			<div class="col-sm-4">
				<label>
					<p>Username:</p>
					<input class="form-control" type="text" name="Username" placeholder="Enter Username" required="">
				</label>
				<br>
				<label>
					<p>Password:</p>
					<input type="password" name="Pword" placeholder="Enter Password" required=""> 
				</label>
				<br>
				<label>
					<p>Confirm password:</p>
					<input class="form-control" type="password" name="CPword" placeholder="Re-enter Password" required=""> 
				</label>
				<br>
				<label>
				<input type="submit" name="sbt" value="submit" class=" btn btn-success">
				</label>

				<label>
					<input type="reset" name="rst" value="reset" class=" btn btn-danger">
				</label>
				<br>
			</div>
			</form>
		</fieldset>
	</div>
</body>
</html>