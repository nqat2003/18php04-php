<?php  
	include 'connectdtb.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM user WHERE id = '$id'";
?>