<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Login2</h2>
	</div>

	<form method="post" action="login2.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="email" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="pass">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="submit2">Login</button>
			<a href="register2.php" style="color: red;">Create an Account</a>
		</div>
		<p>
		</p>
	</form>
