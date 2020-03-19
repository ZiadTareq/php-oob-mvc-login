<?php

class views extends model
{
	public function alreadyExists($email) {
		$check = $this->checkUser($email);
		if ($check->num_rows > 0) {
			echo '<p class="error"> e-mail already exists</p>';
		} else {
			return -1;
		}
	}

	public function incorrectPass($email) {
		$check = $this->checkUser($email);
		if ($check->num_rows > 0) {
			echo '<p class="error"> incorrect password</p>';
		}
		 else {
			echo "<p>if you don't have an account register now </p>";
		}
	}

	public function getSessions() {
		if ($_SESSION['logged_in'] === 1) {
			echo "<h1>welcome " . $_SESSION["fname"] . ".</h1>";
			echo "<h3>your email is " . $_SESSION["e-mail"] . ".</h3>";
		} else {
			header("Location: login.php");
		}
	}

	public function deleteSessionMsg() {
		echo '<h3>You have been logged out. <a class="logout" href="login.php">Go back to login </a></h3>';
	}
}
