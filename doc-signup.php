<?php include('doc-server.php') ?>
<html>
<head>
	<title>The Pearl Hospital-Doctor signup</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/scrolling-nav.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" keywords="hospital, pearl">
	<style type="text/css">
		body{
			background-image: url(img2/nurses.jpeg);
			background-size: 100%;
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
		<div id="section1">
		<fieldset class="well well-lg2" style="margin-left:10%; margin-right:10%">
			<img src="images/doc8.jpeg" width="150px" class="img-circle" height="150px" style=" margin-left:42%; margin-right:48%;">
			<form class="text-center" method="POST" action="doc-signup.php">
				<?php include('doc-errors.php'); ?>
				<legend >Fill in the form below</legend>
				<div class="col-sm-4">
					<label>
						<p >First Name:</p>
						<input type="text" name="Firstname" placeholder="Enter First Name" required=""> 
					</label>
					<br>
					<label>
						<p >Second Name:</p>
						<input type="text" name="Secondname" placeholder="Enter Second Name" required=""> 
					</label>
					<br>
					<label>
						<p >Surname:</p>
						<input type="text" name="Surname" placeholder="Enter Surname" required=""> 
					</label>
					<br>
					<label>
						<p>Doctor's license:</p>
						<input type="text" name="dl" placeholder="Enter License Number" required="">
					</label>
					<br>
				</div>
				<div class="col-sm-4">
					<label>
						<p >E-mail address:</p>
						<input type="email" name="Email" placeholder="Enter E-mail address" required=""> 
					</label>
					<br>
					<label>
						<p>Gender:</p>
						<select name="gender" required="">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
							<option value="Other">Other</option>
						</select>
					</label>
					<br>
					<label>
						<p >ID Number:</p>
						<input type="integer" name="idno" placeholder="Enter ID Number" required=""> 
					</label>
					<br>
					<label>
						<p>Telephone Number:</p>
						<input type="text" name="telenum" placeholder="+(254)" required=""> 
					</label>
					<br>
				</div>
				<div class="col-sm-4">
					<label>
						<p>Location:</p>
						<input type="text" name="location" placeholder="Enter Location" required=""> 
					</label>
					<br>
					<label>
						<p>Username:</p>
						<input type="text" name="Usnm" placeholder="Enter Username" required="">
					</label>
					<br>
					<label>
						<p>Password:</p>
						<input type="password" name="Pword" placeholder="Enter Password" required=""> 
					</label>
					<br>
					<label>
						<p>Confirm password:</p>
						<input type="password" name="CPword" placeholder="Re-enter Password" required=""> 
					</label>
					<br>
					<label>
					<input type="submit" name="sbt" value="submit" class=" btn btn-success text-center">
					</label>

					<label>
						<input type="reset" name="rst" value="reset" class=" btn btn-danger text-center">
					</label>
					<br>
				</div>
			</form>
		</fieldset>
	</div>
</body>
</html>