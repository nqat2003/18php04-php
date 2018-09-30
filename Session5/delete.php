<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		include_once 'connectdtb.php';
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$sql = "delete from user where id = $id";
			mysqli_query($con,$sql);
			header("location: listuser.php");
		}
	?>
</body>
</html>