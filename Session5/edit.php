<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EDIT DATA</title>
</head>
<body>
	<h1>EDIT</h1>
	<?php
		include_once 'connectdtb.php';
		$id = $_GET['id'];
		echo "<small>Edit data for user has id = $id</small>";
		if (isset($_POST['submit'])){
			$user = $_POST['user'];
			$pass = md5(trim($_POST['pass']));
			$sql = "update user set user = '$user', pass='$pass' where id=$id";
			mysqli_query($con,$sql);
			header("location:listuser.php");
		}
	?>
	
	<form action="" method="POST">
		<p>Username: <input type="text" name="user"></p>
		<p>Pass: <input type="password" name="pass"></p>
		<input type="submit" name="submit" value="Sửa">
	</form>
</body>
</html>