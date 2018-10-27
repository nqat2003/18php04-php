<?php  
	class User extends ConnectDTB{
		function insertUser($name,$pass,$ava){
			$sql = "INSERT INTO users(username,password,avatar) VALUES ('$name','$pass','$ava')";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function updateUser($name,$pass,$ava,$id){
			$sql = "UPDATE users SET username = '$name',password = '$pass',avatar = '$ava' WHERE id = '$id'";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
	}
?>