<html>
<head>
	<title>Symptoms sent</title>
	<title>The Pearl Hospital-Symptoms report</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="Bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Bootstrap/js/scrolling-nav.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" keywords="hospital, pearl">
	
</head>
<body>

	<!-- Relevant background picture to follow -->
<?php 
		if (isset($_POST['sbt'])) {
			$dbconn=mysqli_connect('localhost', 'root', '', 'hospitalsys');
			if (!$dbconn) {
				# code...
				echo "Failed to connect to database";
			}else{
				extract($_POST);
				$dinsert = "INSERT INTO `symptoms`(`ID`,`email`,`symptoms`,`duration`,`medication`,`disease`)
				VALUES(NULL, '$Email', '$sym', '$dur', '$rdo1', '$condition')";
				$dquery=mysqli_query($dbconn,$dinsert);
				if ($dquery) {
					echo "
					Dear patient,<br>
					You have successfully submitted your symptoms.<a href='https//www.gmail.com'>Check your email account</a> to view your appointment date and the doctor who will attend to you.
					<br>
					Yours sincerely,<br>
					The Pearl Hospital. ";
					# code...
				}
			}
			# code...
			echo "<a href='Home.php'>Done</a>";
		}
	 ?>
</body>
</html>