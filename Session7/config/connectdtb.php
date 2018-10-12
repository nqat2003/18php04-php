<?php 
	class ConnectDTB{
		public $conn;
		function __construct(){
			$this->connect();
		}
		function connect(){
			$server = 'localhost';
			$user = 'root';
			$pass = '';
			$database = '18php04_shop';
			$this->conn = mysqli_connect($server,$user,$pass,$database);
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL".mysqli_connect_error();
			}
			return $this->conn;
		}
	}
?>