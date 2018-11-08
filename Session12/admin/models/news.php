<?php  
	class News extends ConnectDTB{
		function InsertNews($name,$description,$content,$image){
			$sql = "INSERT INTO news (title,description,content,image) VALUES ('$name','$description','$content','$image')";
			return mysqli_query($this->conn,$sql);			
		}
		function getListNews(){
			$sql = "SELECT * FROM news";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function deleteNews($id){
			$sql = "DELETE FROM news WHERE id='$id'";
			return mysqli_query($this->conn,$sql);
		}
	}
?>