<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pentru a continua va rugam sa va autentificati</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h3>Acces restrictionat, va rugam sa va autentificati</h3>
	</div>
	
	<form method="post" action="login.php">


		<div class="input-group">
			<label>Nume de utilizator</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Parola</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
		</p>
	</form>


</body>
</html>