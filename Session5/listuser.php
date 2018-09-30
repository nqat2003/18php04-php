<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List User</title>
</head>
<body>
	<h1>LIST USER</h1>
	<form method="POST" action="#">
		<p>Search for name: <input type="text" name="name"></p>
		<input type="submit" name="submit">
	</form><br>
	<?php
		include_once('connectdtb.php');
		$name = "";
		if (isset($_POST['submit'])) {
		 	$name = $_POST['name'];
		} 
		if ($name == ""){
			$sql = 'select * from user'; 		
		}
		else{
			$sql = "select * from user where user like '%$name%'";
		}
		$result = mysqli_query($con,$sql);
	?>
	
	<?php
		while ($row = mysqli_fetch_array($result)) {
		 	echo "Id:".$row['id']."<br> ";
		 	echo "username:". $row['user']." <br>";
		 	echo "password: ".$row['pass']."<br>";
		 	echo "<a href='delete.php?id={$row['id']}'>DELETE</a> - ";
		 	echo "<a href='edit.php?id={$row['id']}'>EDIT</a> <hr>";
		}
	?>
</body>
</html>