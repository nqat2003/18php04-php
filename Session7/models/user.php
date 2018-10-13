<?php  
	include 'config/connectdtb.php';
	class User extends ConnectDTB{
		function InsertUser($name,$username,$pass,$avatar){
			$secPass = md5(trim($pass));
			$sql = "INSERT INTO users (name,username,pass,avatar) VALUES ('$name','$username','$secPass','$avatar')";
			mysqli_query($this->conn,$sql);			
		}
		function getUserInfo($id){
			$sql = "SELECT * FROM users WHERE id = '$id'";
			return mysqli_query($this->conn,$sql);
		}
		function listUser(){
			$sql = "SELECT * FROM users";
			$listUser = mysqli_query($this->conn,$sql);
			return $listUser;
		}
		function deleteUser($id){
			$sql = "DELETE FROM users WHERE id = '$id'";
			return mysqli_query($this->conn,$sql);
		}
		function updateUser($name,$username,$pass,$avatar,$id){
			$secPass = md5(trim($pass));
			$sql = "UPDATE users SET name = '$name',username='$username', pass= '$secPass',avatar = '$avatar' WHERE id = '$id' ";
			return mysqli_query($this->conn,$sql);
		}
		function userLogin($username,$pass){
			$secPass = md5(trim($pass));
			$sql = "SELECT * FROM users WHERE username = '$username' AND pass = '$secPass'";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
	}
?>