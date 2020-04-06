<?php 
	session_start();

	// variable declaration
	$CNP = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'licenta');

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$CNP = mysqli_real_escape_string($db, $_POST['CNP']);
		$Parola = mysqli_real_escape_string($db, $_POST['Parola']);

		if (empty($CNP)) {
			array_push($errors, "CNP is required");
		}
		if (empty($Parola)) {
			array_push($errors, "Parola is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM pacienti WHERE CNP='$CNP' AND Parola='$Parola'";
			echo $Parola;
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['CNP'] = $CNP;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../Licenta_Dash/components/');
			}else {
				array_push($errors, "Wrong CNP/Parola combination");
			}
		}
	}

?>