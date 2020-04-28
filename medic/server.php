<?php 
	session_start();

	$CNP = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	$db = mysqli_connect('localhost', 'root', '', 'licenta');

	if (isset($_POST['login_user'])) {
		$CNP = mysqli_real_escape_string($db, $_POST['username']);
		$Parola = mysqli_real_escape_string($db, $_POST['password']);
		$_Session['CNP']=$CNP;
		if (empty($CNP)) {
			array_push($errors, "CNP este obligatoriu");
		}
		if (empty($Parola)) {
			array_push($errors, "Parola este obligatorie");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM medici WHERE CNP='$CNP' AND Parola='$Parola'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['CNP'] = $CNP;
				$_SESSION['success'] = "Ați fost logat cu succes.";
				header('location: ../medic/components');
			}else {
				array_push($errors, "Wrong CNP/Parola combination");
			}
		}
	}

?>