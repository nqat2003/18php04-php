<?php 
	$chimchuot = mysqli_connect("localhost","root","");
	mysqli_select_db($chimchuot,"news");
	if (mysqli_connect_errno()!==0) {
		die("Error: Could not to the database. An error ".mysqli_connect_error()." ocurred.");
	}
?>
