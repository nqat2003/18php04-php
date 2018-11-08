<?php  
	class User extends ConnectDTB{
		function InsertUser($name,$username,$password,$avatar,$role){
			$secPass = md5(trim($password));
			$sql = "INSERT INTO users (name,username,password,avatar,role) VALUES ('$name','$username','$secPass','$avatar','$role')";
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
		function updateUser($name,$username,$password,$avatar,$id){
			$secPass = md5(trim($password));
			$sql = "UPDATE users SET name = '$name',username='$username', password= '$secPass',avatar = '$avatar' WHERE id = '$id' ";
			return mysqli_query($this->conn,$sql);
		}
		function userLogin($username,$password){
			$secPass = md5(trim($password));
			$sql = "SELECT * FROM users WHERE username = '$username' AND passwordword = '$secPass'";
			$result = mysqli_query($this->conn,$sql);
			return $result->num_rows;
		}
		function getUserInfoByLogin($username,$password){
			$secPass = md5(trim($password));
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$secPass'";
			return mysqli_query($this->conn,$sql);
		}
	}
?>