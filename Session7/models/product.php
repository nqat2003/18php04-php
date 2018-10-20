<?php  
	class Product extends ConnectDTB{
		function InsertProduct($name,$price,$img,$description){
			$sql = "INSERT INTO products (name,price,image,description) VALUES ('$name','$price','$img','$description')";
			mysqli_query($this->conn,$sql);			
		}
		function getListProduct(){
			$sql = "SELECT * FROM products";
			$listProduct = mysqli_query($this->conn,$sql);
			return $listProduct;
		}
		function deleteProduct($id){
			$sql = "DELETE FROM products WHERE id = '$id'";
			mysqli_query($this->conn,$sql);
		}
		function editProduct($name,$price,$img,$description,$id){
			$sql = "UPDATE products SET name = '$name',price = '$price', image = '$img',description = '$description' WHERE id = '$id'";
			return mysqli_query($this->conn,$sql);
		}
		function getProductInfo($id){
			$sql = "SELECT * FROM products WHERE id = '$id'";
			$productInfo = mysqli_query($this->conn,$sql);
			return $productInfo;
		}
	}
?>