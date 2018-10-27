<?php  
	class General extends ConnectDTB{
		function showAll($table){
			$sql = "SELECT * FROM $table";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function delete($table,$id){
			$sql = "DELETE FROM $table WHERE id = '$id'";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function checkLogin($check=NULL){
			if (isset($check)) {
				return true;
			}else return false;
		}
		function uploadImages($tmpFile,$imageUpload,$folder){
			$
			$target_dir = $folder . uniqid().$imageName;
			move_uploaded_file($tmpFile, $target_dir);
			return 
		}
	}
?>