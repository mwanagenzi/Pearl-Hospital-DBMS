<html>
<head>
	<title>The Pearl Hospital-Diagnosis</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/scrolling-nav.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" keywords="hospital, pearl">
	<style type="text/css">
		body{
			background-image:url(img1/back.jpg);
			background-size: 110%;
			background-repeat: no-repeat;
		}
	</style>
	</style>
</head>
<body>
	`<nav class="navbar navbar-default navbar-fixed-top">
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
	<?php 
		$dbconn=mysqli_connect('localhost', 'root', '', 'hospitalsys');
		$query="SELECT * FROM symptoms ";
		$runquery=mysqli_query($dbconn, $query);
		echo "<table border=2 style='text-align:center'>
		         	<thead>
		          		<th>
		          			<tr>
		          			<td>ID</td>
		          			<td>email</td>
		          			<td>symptoms</td>
		          			<td>duration</td>
		          			<td>medication</td>
		          			<td>disease</td>
		          			</tr>
		          		</th>
		          	</thead>
		          <tbody>";
		while ($rows = mysqli_fetch_assoc($runquery)) {
				echo "
					<tr>
				        <td>$rows[ID]</td>
				        <td>$rows[email]</td>
				        <td>$rows[symptoms]</td>
				        <td>$rows[duration]</td>
				        <td>$rows[medication]</td>
				        <td>$rows[disease]</td>";
			# code...
		}
		echo "</tbody>
		   </table>";
		echo "<a href='Home.php'>Done</a>";
	 ?>
</body>
</html>