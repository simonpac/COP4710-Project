<?php

	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	$validUserNameLength = strlen($username) >= 4 && strlen($username) <= 20;
	$validPasswordLength = strlen($password) >= 8 && strlen($password) <= 20;

	if ($validUserNameLength && $validPasswordLength) {
		$servername = "localhost";
		$db_user = "root";
		$db_pw = "root";
		$dbname = "eventhut";

		// Create connection
		$conn = new mysqli($servername, $db_user, $db_pw, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "INSERT INTO Users (username, password)
		VALUES ('$username', '$password')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
?>	