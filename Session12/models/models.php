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
	}
 ?>