<?php  
	class News  extends ConnectDTB{
		function insertNews($tittle,$image){
			$sql = "INSERT INTO news(tittle,image) VALUES ('$tittle','$image')";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function updateNews($tittle,$image,$id){
			$sql = "UPDATE news SET tittle = '$tittle',image = '$image' WHERE id = '$id'";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
	}
?>