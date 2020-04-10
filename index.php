<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Zona Pacienti</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h3>Pentru a vedea informatiile dvs va rugam sa va autentificati.</h3>
	</div>
	
	<form method="post" action="index.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Nume de utilizator</label>
			<input type="text" name="CNP" >
		</div>
		<div class="input-group">
			<label>Parola</label>
			<input type="password" name="Parola">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
		</p>
	</form>


</body>
</html>