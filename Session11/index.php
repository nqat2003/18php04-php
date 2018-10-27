<?php 
	include 'backend_controller.php';
	$controller = new Controller();
	$controller->handleRequest();
	// while ($row = mysqli_fetch_array($listUser)) {
	// 	echo $row['username'] ."|".$row['pass'];
	// }
?>