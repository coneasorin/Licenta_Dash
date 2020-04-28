<?php 
	session_start();

	$username = "";
	$email    = "";
	$_SESSION['success'] = "";

	$db = mysqli_connect('localhost', 'root', '', 'register');

	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "Ai fost logat";
				header('location: index.php');
			}
			
		
	}

?>