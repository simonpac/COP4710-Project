<?php

	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	$fName = $_POST['fName'];
	$lName = $_POST['lName'];

	$validUserNameLength = strlen($username) >= 4 && strlen($username) <= 20;
	$validPasswordLength = strlen($password) >= 8 && strlen($password) <= 20;
	$validFNameLength = strlen($fName) >= 2 && strlen($fName) <= 20;
	$validLNameLength = strlen($lName) >= 2 && strlen($lName) <= 20;

	if ($validUserNameLength && $validPasswordLength && $validFNameLength && $validLNameLength) {
		$servername = "localhost";
		$db_user = "root";
		$db_pw = "root";
		$dbname = "eventhut";

		$password = md5($password);

		// Create connection
		$conn = new mysqli($servername, $db_user, $db_pw, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "INSERT INTO Users (username, password, fName, lName, isAdmin, isSuperAdmin)
		VALUES ('$username', '$password', '$fName', '$lName', 0, 0)";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}

	else {
		echo '<script type="text/javascript">'
   			, 'alert("Make sure all fields are entered correctly.\n\nName lengths must be in between 2 and 20 characters.\n\nUsername length must be in between 4 and 20 characters and password length must be in between 8 and 20 characters.");'
   			, '</script>';
	}
?>	