<?php
	session_start();

	//print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Events Around Campus</title>
</head>
<body>

<?php if (!isset($_SESSION['user_id'])): ?>

	<div>
		<h1>Sign In to Eventhut</h1>
		<form action="../Scripts/login.php" method="post">
			Username:<br>
			<input type="text" name="username">
			<br>
			Password:<br>
			<input type="password" name="password">
			<br>
			<input type="submit" value="Sign In">
		</form>
	</div>

	<div>
		<h2>Sign Up For Eventhut!</h2>
		<form action="../Scripts/signup.php" method="post">
			First Name:<br>
			<input type="text" name="fName">
			<br>
			Last Name:<br>
			<input type="text" name="lName">
			<br>
			Username:<br>
			<input type="text" name="username">
			<br>
			Password:<br>
			<input type="password" name="password">
			<br>
			<input type="submit" value="Sign Up">
		</form>
	</div>

<?php else: ?>

<?php endif; ?>

</body>
</html>