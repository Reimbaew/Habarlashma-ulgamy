<!DOCTYPE html>
<html>

<head>
	<title>PHP/MySQLi, Ajax/JQuery</title>
</head>

<body>
	<h2>Hasaba giriş nokady</h2>
	<form method="POST" action="login.php">
		Adyňyz: <input type="text" name="username">
		Parolyňyz: <input type="password" name="password"> <br><br>
		<input type="submit" value="Girmek">
	</form><br>
	<?php
	session_start();
	if (isset($_SESSION['message'])) {
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
	?>
</body>

</html>
