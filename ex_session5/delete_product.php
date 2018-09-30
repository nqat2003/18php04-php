<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DELETE</title>
</head>
<body>
	<?php
		require 'connect.php'; 
		$id = $_GET['id'];
		$sql = "DELETE FROM products WHERE id = '$id'";
		mysqli_query($con,$sql);
		header("location:list_product.php");
	?>
</body>
</html>