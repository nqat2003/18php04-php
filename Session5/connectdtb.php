<?php 
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$database = '18php04_01';
	$con = mysqli_connect($server,$user,$pass,$database);
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL".mysqli_connect_error();
	}
?>