<?php 
	session_start();
	$username="";
	$email="";
	$dr_license="";
	$errors=array();
	$dtbconn=mysqli_connect('localhost','root','','hospitalsys');
	if (isset($_POST['sbt'])) {
		$username=mysqli_real_escape_string($dtbconn, $_POST['Usnm']);
		$email=mysqli_real_escape_string($dtbconn,$_POST['Email']);
		$dr_license=mysqli_real_escape_string($dtbconn, $_POST['dl']);
		$firstname=mysqli_real_escape_string($dtbconn, $_POST['Firstname']);
		$secondname=mysqli_real_escape_string($dtbconn, $_POST['Secondname']);
		$surname=mysqli_real_escape_string($dtbconn, $_POST['Surname']);
		$idnumber=mysqli_real_escape_string($dtbconn, $_POST['idno']);
		$gen=mysqli_real_escape_string($dtbconn, $_POST['gender']);
		$telnumber=mysqli_real_escape_string($dtbconn, $_POST['telenum']);
		$local=mysqli_real_escape_string($dtbconn, $_POST['location']);
		$pass1=mysqli_real_escape_string($dtbconn, $_POST['Pword']);
		$pass2=mysqli_real_escape_string($dtbconn, $_POST['CPword']);
	if ($pass1!==$pass2) {
		array_push($error, "Passwords do not match");
		# code...
	}
	$usercheck="SELECT * FROM docusers WHERE Username= '$username' OR email='$email'
	OR Dr_license_no='$dr_license' LIMIT 1";
	$dtbquery=mysqli_query($dtbconn,$usercheck);
	$dtbfetch=mysqli_fetch_assoc($dtbquery);

	if ($dtbfetch['Username']===$username) {
		array_push($errors, "Username exists");
		# code...
	}
	if ($dtbfetch['email']===$email) {
		array_push($errors,"Email exists");
		# code...
	}
	if ($dtbfetch['Dr_license_no']===$dr_license) {
		array_push($errors,"This doctor's license is registered to someone else");
		# code...
	}
	if (count($errors)==0) {
		$pass1=md5('Pword');
		$dtbins="INSERT INTO docusers (Firstname,Secondname,Surname,Dr_license_no,email,Gender,ID_No,Tel_No,Location,Username,Password)
		VALUES ('$firstname','$secondname','$surname','$dr_license','$email','$gen','$idnumber','$telnumber','$local','$username','$pass1') ";
		# code...
		mysqli_query($dtbconn,$dtbins);
		$_SESSION['Usnm']=$username;
		$_SESSION['success']="Welcome";
		header('location:doc-diagnose.php');
	}
	}

	//login
	if (isset($_POST['logbtn'])) {
		# code...
		$username=mysqli_real_escape_string($dtbconn, $_POST['Username']);
		$psd=mysqli_real_escape_string($dtbconn,$_POST['password']);
			$psd=md5($psd);
			$dtbins="SELECT * FROM docusers WHERE Username='$username' AND Password='$psd' ";
			$confirm=mysqli_query($dtbconn,$dtbins);
			if (mysqli_num_rows($confirm)!=1) {
				$_SESSION['Username']=$username;
				$_SESSION['success']="Successful login";
				header('location: doc-diagnose.php');
				# code...
			}else{
				array_push($errors, "Invalid credentials");
			}
		}
	}
 ?>