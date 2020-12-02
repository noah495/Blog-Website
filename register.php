<?php include('functions.php') ?>

<link rel="stylesheet" href="style1.css">
<html>
<head>
	<title>Registration</title>
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form class= "" method="post" action="register.php">
	<div class="input-group">
		<label>Username</label> <br>
		<input type="text" name="username" value="">
	</div>
	<div class="input-group">
		<label>Email</label>	<br>
		<input type="email" name="email" value="">
	</div>
	<div class="input-group">
		<label>Password</label>	<br>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>	<br>
		<input type="password" name="password_2">
	</div>
	<div class="submit">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>