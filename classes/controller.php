<?php

class controller extends model
{
	public function createUser($name , $email , $password , $gender) {
		$this->setUser($name , $email , $password , $gender);
	}

	public function userLogin($email , $password) {
		return $this->login($email , $password);
	}

	public function setSessions($sessions) {
		foreach ($sessions as $session) {
			$_SESSION["fname"] = $session["fname"];
			$_SESSION["e-mail"] = $session["email"];
			$_SESSION['logged_in'] = 1;
		}
	}
	public function deleteSessions() {
		session_unset();
		session_destroy();
	}
}
