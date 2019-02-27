<html>
<head>
	<title>The Pearl Hospital-Home</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/scrolling-nav.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" keywords="hospital, pearl">
	<style type="text/css">
		body{
			background-image: url(img/back.jpg);
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
	<div id="content" class="text-center" style="font-size:20px">
		<img src="images/hptl.jpeg" width="500px">
		<br>
		<!-- Hospital images or logo to follow -->
		<div class="col-sm-6 well well-lg">
			<h3>Our Services</h3>
			<p>We offer world class treatment to our patients who leave the hospital better, healthier
				and more vibrant than they came. Our staff are highly trained and eqiupped with the best skills
				to cope up with the ever-changing world of healthcare.</p>
				<br>
				<div id="mycarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
					<li data-target="#mycarousel" data-slide-to="1"></li>
					<li data-target="#mycarousel" data-slide-to="2"></li>
					<li data-target="#mycarousel" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img class="img-thumbnail" width="350" src="img2/docs.jpeg" alt="Doctors">
						<div class="carousel-caption">
							<p>Our esteemed doctors</p>
						</div>
					</div>
					<div class="item">
						<img class="img-thumbnail" width="350" src="img2/serv.jpeg" alt="Surgery">
						<div class="carousel-caption">
							<p>World-class-doctors</p>
						</div>
					</div>
					<div class="item">
						<img class="img-thumbnail" width="350" src="img2/repu.jpeg" alt="reputation">
						<div class="carousel-caption">
							<p>#1 CHOICE</p>
						</div>
					</div>
					<div class="item">
						<img class="img-thumbnail" width="350" src="img2/award3.jpeg" alt="Creme de la creme">
						<div class="carousel-caption">
							<p>Creme de la creme</p>
						</div>
					</div>
					<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right caroysel-control" href="#mycarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
				<!-- Doctors images to follow -->
			<h3>Our reputation</h3>
			<p>The Pearl Hospital has been recognised by all and sundry, far and wide for its optimum services 
				rendered to its customers, patients and other stakeholders of the hospital. This guarantees you of 
				utmost performance and delivery of quality services to you. </p>
				<!-- Doctors and patients images to follow -->
			
		</div>
		<div class="col-sm-6 well well-lg">
			<h3>Facilities</h3>
			<p>To keep our services up-to-date, the hospital is equipped with the state-of-the-art machines 
				that ease the task of diagnosing and treating all manner of diseases, which we ocassionally 
				receive from donors and other well-wishers.</p>
				<!-- Equipment images to follow -->
			<h3>Friendly staff</h3>
			<p>Our members of staff are qualified personell who have been trained to deal with patients and 
			general customers with utmost respect and care. This has put Pearl Hospital as a favourite among
			people countrywide and internationally.</p>
			<br>
			<!-- More images of staff with patients to follow -->
			<div id="mycarousel1" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#mycarousel1" data-slide-to="0" class="active"></li>
					<li data-target="#mycarousel1" data-slide-to="1"></li>
					<li data-target="#mycarousel1" data-slide-to="2"></li>
					<li data-target="#mycarousel1" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img class="img-thumbnail" src="img2/equip.jpeg" width="350" alt="State-Of-The-Art">
						<div class="carousel-caption">
							<p>State-Of-The-Art</p>
						</div>
					</div>
					<div class="item">
						<img class="img-thumbnail" src="img2/equip4.jpeg" width="350" alt="High-end facilities">
						<div class="carousel-caption">
							<p>High-end facilities</p>
						</div>
					</div>
					<div class="item">
						<img class="img-thumbnail" src="img/pat5.png" width="350" alt="Friendly staff">
						<div class="carousel-caption">
							<p>Friendly staff</p>
						</div>
					</div>
					<div class="item">
						<img class="img-thumbnmail" src="img2/nurses.jpeg" width="350" alt="Friendly staff">
						<div class="carousel-caption">
							<p>Friendly staff</p>
						</div>
					</div>
					<a class="left carousel-control" href="#mycarousel1" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#mycarousel1" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>