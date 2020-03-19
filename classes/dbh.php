<?php
class dbh
{
	private $servername = "localhost";
	private $username = "zeyad";
	private $dbpassword = "Ziad@2551997";
	private $dbname = "US";

	protected function connect() {
		$conn = new mysqli($this->servername, $this->username, $this->dbpassword, $this->dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	}
}
