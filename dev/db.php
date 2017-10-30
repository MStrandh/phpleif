<?php
	include_once "db_conf.php";

	class DatabaseConnectionManager {
		private $link;

		function __construct() {

		}

		function __destruct() {
			$this->closeConnection();
		}

		function openConnection() {
			global $host;
			global $user;
			global $password;
			global $db;
			global $port;

			$this->link = mysqli_init();

			$success = mysqli_real_connect(
				$this->link, 
				$host, 
				$user, 
				$password, 
				$db,
				$port
			);

			if (!$success) {
				die("Connection failed: " . $this->link->connect_error);
			} 
		}

		function closeConnection() {
			$this->link->close();
		}

		function runQuery($query) {
			return $this->link->query($query);
		}		
	}
?>