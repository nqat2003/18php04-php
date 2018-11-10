<?php 
	/**
	 * 
	 */
	class Model extends ConnectDTB
	{
		function listAll(){
			$sql = "SELECT * FROM news";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function getDetails($id){
			$sql = "SELECT * FROM news WHERE id = '$id'";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function addComment($content,$newsId,$userId){
			$sql = "INSERT INTO comment (news_id,users_id,content) VALUES ('$newsId','$userId','$content')";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function getListComment($id){
			$sql = "SELECT comment.*,users.name,users.avatar FROM comment INNER JOIN users ON comment.users_id = users.id WHERE comment.news_id = '$id'";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function user_login($username,$password){
			$secPass = md5(trim($password));
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$secPass'";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function userLike($newsId,$userId){
			$sql = "INSERT INTO `like` (news_id,users_id) VALUES ('$newsId','$userId')";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function getLike($id,$userId=''){
			if ($userId != '') {
				$sql = "SELECT * FROM `like` WHERE news_id = '$id' AND users_id = '$userId'";
				$result = mysqli_query($this->conn,$sql);
				return $result->num_rows;
			}else
				$sql = "SELECT * FROM `like`";
			$result = mysqli_query($this->conn,$sql);
			return $result->num_rows;
		}
	}
 ?>