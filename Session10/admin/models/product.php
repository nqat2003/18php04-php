<?php  
	class Product extends ConnectDTB{
		function InsertProduct($name,$price,$img,$description,$categoryId){
			$sql = "SELECT name FROM category WHERE id = '$categoryId'";
			$excute = mysqli_query($this->conn,$sql);
			while ($row = mysqli_fetch_array($excute)) {
				$cate = $row['name'];
			}
			$sql = "INSERT INTO products (name,price,image,description,category) VALUES ('$name','$price','$img','$description','$cate')";
			mysqli_query($this->conn,$sql);			
		}
		function getListProduct($cateName=''){
			if ($cateName == '') {
				$sql = "SELECT * FROM products";
			}else{
				$sql = "SELECT * FROM products WHERE category = '$cateName'";
			}
			$listProduct = mysqli_query($this->conn,$sql);
			return $listProduct;
		}
		function deleteProduct($id){
			$sql = "DELETE FROM products WHERE id = '$id'";
			mysqli_query($this->conn,$sql);
		}
		function editProduct($name,$price,$img,$description,$id,$cateName){
			$sql = "UPDATE products SET name = '$name',price = '$price', image = '$img',description = '$description',category = '$cateName' WHERE id = '$id'";
			return mysqli_query($this->conn,$sql);
		}
		function getProductInfo($id){
			$sql = "SELECT * FROM products WHERE id = '$id'";
			$productInfo = mysqli_query($this->conn,$sql);
			return $productInfo;
		}
		function getCategory(){
			$sql = "SELECT * FROM category";
			$listCategory = mysqli_query($this->conn,$sql);
			return $listCategory;
		}
		function getCategoryForUpdateForm($name){
			$sql = "SELECT * FROM category WHERE name != '$name'";
			$listCategory = mysqli_query($this->conn,$sql);
			return $listCategory;
		}
	}
?>