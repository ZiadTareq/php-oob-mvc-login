<?php

class model extends dbh
{
	protected function getUser() {
		$sql = "SELECT fname, email FROM User";
		$result = $this->connect()->query($sql);
		return $result->fetch_all(MYSQLI_ASSOC);
	}

	protected function setUser($name, $email, $password, $gender) {
		$sql = "INSERT INTO User (fname, email, pass, gender) VALUES ('$name' , '$email' , '$password' , '$gender')";
		return $this->connect()->query($sql);
	}

	protected function checkUser($email) {
		$sql = "SELECT fname FROM User WHERE  email = '$email'";
		return $this->connect()->query($sql);

	}

	protected function login($email, $password) {
		$sql = "SELECT fname, email FROM User WHERE  email = '$email' AND pass = '$password'";
		$result = $this->connect()->query($sql);
		return $result;
	}
}
