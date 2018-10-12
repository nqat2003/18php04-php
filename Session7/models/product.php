<?php  
	include 'config/connectdtb.php';
	class Product extends ConnectDTB{
		function InsertProduct($name,$price,$img){
			$sql = "INSERT INTO products (name,price,image) VALUES ('$name','$price','$img')";
			mysqli_query($this->conn,$sql);			
		}
		function getListProduct(){
			$sql = "SELECT * FROM products";
			$listUser = mysqli_query($this->conn,$sql);
			return $listUser;
		}
		function deleteProduct($id){
			$sql = "DELETE FROM products WHERE id = '$id'";
			mysqli_query($this->conn,$sql);
		}
		function editProduct($name,$price,$img,$id){
			$sql = "UPDATE products SET name = '$name',price = '$price', image = '$img' WHERE id = '$id'";
			return mysqli_query($this->conn,$sql);
		}
		function getProductInfo($id){
			$sql = "SELECT * FROM products WHERE id = '$id'";
			$productInfo = mysqli_query($this->conn,$sql);
			return $productInfo;
		}
	}
?>