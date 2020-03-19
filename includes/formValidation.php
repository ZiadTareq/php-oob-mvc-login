<?php

$nameErr = $emailErr = $passwordErr = $genderErr = "";
$name = $email = $password = $gender = -1;;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

	if (empty($_POST["name"])) {
		$nameErr = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			$nameErr = "Only letters and white space allowed";
			$name = -1;
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
	} else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format";
			$email =-1;
		}
	}

	if (empty($_POST["password"])) {
		$passwordErr = "password is required";
	} else {
		$password = test_input($_POST["password"]);
		// check if password is more than 8 chars
		if (strlen($password) < 8) {
			$passwordErr = "password should be more than 8 characters";
			$password = -1;
		}
	}

	if (empty($_POST["gender"])) {
		$genderErr = "Gender is required";
		$gender = -1;
	} else {
		$gender = test_input($_POST["gender"]);
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
