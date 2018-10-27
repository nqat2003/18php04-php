<?php  
	class Product  extends ConnectDTB{
		function insertProduct($name,$image){
			$sql = "INSERT INTO products (name,image) VALUES ('$name','$image')";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function updateProduct($name,$image,$id){
			$sql = "UPDATE products SET name = '$name',image = '$image' WHERE id = '$id' ";
			$resust = mysqli_query($this->conn,$sql);
			return $result;
		}
	}
?>