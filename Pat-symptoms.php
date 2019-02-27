<html>
<head>
	<title>The Pearl Hospital-Patient report</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/scrolling-nav.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" keywords="hospital, pearl">
	<style type="text/css">
		body{
			background-image:url(img/sym1.png);
			background-size: 60%
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
								<li> <a class="active" href="About-Us.php">ABOUT US</a> </li>
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
	<fieldset>
		<form method="POST" class="text-center" action="save-symptoms.php">
			<label>
					<p >E-mail address:</p>
						<input type="email" name="Email" placeholder="Enter E-mail address" required=""> 
			</label>
			<br>
			<label>
				<p>Key in your symptoms:</p>
				<textarea name="sym" type="text" placeholder="Text here"></textarea>
			</label>
			<br>
			<label>
				<p>Duration(days):</p>
				<select required="" name="dur">
					<option value="0-1day">0-1day</option>
					<option value="1-3days">1-3days</option>
					<option value="3-7days">3-7days</option>
					<option value="1week plus" >1 week plus</option>
				</select>	
			</label>
			<br>
			<label>
				<p>Have you been under other medications?</p>
				<input type="text" name="rdo1" placeholder="Text either 'Yes' or 'No' ">
				<br>
			</label>
			<br>
			<label>
				<p>If yes, state the condition or disease</p>
				<input type="text" name="condition" placeholder="Text here">
			</label>
			<label>
			<input type="submit" name="sbt" value="submit" class=" btn btn-success text-center">
			<input type="reset" name="rst" value="reset" class=" btn btn-danger text-center">
			</label>
		</form>
	</fieldset>
</body>
</html>