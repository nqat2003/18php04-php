<?php  
	class ConnectDTB{
		function __construct()
		{
			$this->connect();
		}
		function connect(){
			$sever = "localhost";
			$user = "root";
			$pass = "";
			$database = "18php04_solution";
			$this->conn = mysqli_connect($sever,$user,$pass,$database);
			if (mysqli_connect_errno()) {
				echo "Failed to connect to MySQL".mysqli_connect_error();
			}
			return $this->conn;
		}
	}
?>