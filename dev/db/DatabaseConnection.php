<?php
	include_once "db_conf.php";
	include_once "debug.php";

	class DatabaseConnection {

		private $link;
		private $sqlStatement;

		function __construct() {

		}

		function __destruct() {
			
		}

		function openConnection() {
			global $host;
			global $user;
			global $password;
			global $db;
			global $port;

			
			$dsn = "mysql:dbname=" . $db . ";host=" . $host . ";charset=UTF8";

			try {
				$this->link = new PDO($dsn, $user, $password);
				$this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			} catch (PDOException $e) {
				die('Connection failed: ' . $e->getMessage());
			}
		}

		function prepare($query) {
			$this->sqlStatement = $this->link->prepare($query);
		}

		function bindParam($paramName, $value) {
			$this->sqlStatement->bindParam($paramName, $value);
		}

		function execute() {
			return $this->sqlStatement->execute();
		}

		function fetch() {
			return $this->sqlStatement->fetch(PDO::FETCH_ASSOC);
		}
	}
?>