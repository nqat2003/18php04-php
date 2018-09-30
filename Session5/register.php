<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<style type="text/css">
		#wrapper{
			display: flex;
			justify-content: space-around;
		}
	</style>
</head>
<body>
	<?php
		// include_once 'connectdtb.php';
		require_once 'connectdtb.php';
		if (isset($_POST['submit'])) {
			$user = $_POST['user'];
			$pass = md5(trim($_POST['pass']));
			$sql = "insert into user (user,pass) values ('$user','$pass')";
			mysqli_query($con,$sql);
			header("location:listuser.php");
		}

	?>
	<div id="wrapper">
		<div id="form">
			<h1>Register Form</h1>
			<form method="POST" action="#" name="Register">
				<p>Username: 
					<input type="text" name="user">
				</p>
				<p>Password: 
					<input type="password" name="pass">
				</p>
				<input type="submit" name="submit">
			</form>
		</div>
	</div>
</body>
</html>