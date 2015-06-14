<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Events Around Campus</title>
</head>
<body>

<?php if (!isset($_SESSION['user_id'])): ?>
	<h1>Sign In to Eventhut</h1>
	<form action="../Scripts/authenticate_user.php" method="post">
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
		<input type="submit" value="Sign In">
	</form>
<?php endif; ?>

</body>
</html>