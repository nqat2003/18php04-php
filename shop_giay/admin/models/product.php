<?php  
	class Product extends ConnectDTB{
		function InsertProduct($name,$price,$des,$type,$hot,$size,$discount,$info,$image,$color){
			$sql = "INSERT INTO products (name,price,description,type,hot,size,discount,information,image,color) VALUES ('$name','$price','$des','$type','$hot','$size','$discount','$info','$image','$color')";
			return mysqli_query($this->conn,$sql);			
		}
		function getListProduct(){
			$sql = "SELECT products.*,type.name 'nametype' FROM products INNER JOIN type ON products.type = type.id";
			$listProduct = mysqli_query($this->conn,$sql);
			return $listProduct;
		}
		function deleteProduct($id){
			$sql = "DELETE FROM products WHERE id = '$id'";
			mysqli_query($this->conn,$sql);
		}
		function editProduct($name,$price,$description,$type,$color,$hot,$discount,$info,$size,$img,$id){
			$sql = "UPDATE `products` SET `name`='$name',`image`='$img',`type`='$type',`size`='$size',`color`='$color',`price`='$price',`hot`='$hot',`discount`='$discount',`description`='$description',`information`='$info' WHERE id = '$id'";
			return mysqli_query($this->conn,$sql);
		}
		function getCategory(){
			$sql = "SELECT * FROM type";
			$listCategory = mysqli_query($this->conn,$sql);
			return $listCategory;
		}
		function addType($name){
			$sql = "INSERT INTO type (name) VALUES ('$name')";
			return mysqli_query($this->conn,$sql);
		}
		function getProductInfo($id){
			$sql = "SELECT products.*,type.name 'nametype' FROM products INNER JOIN type ON products.type = type.id WHERE products.id = '$id'";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function getShopName(){
			$sql = "SELECT * FROM shopname";
			$result = mysqli_query($this->conn,$sql);
			while ($row = mysqli_fetch_array($result)){
				$name = $row['shopname'];
			}
			return $name;
		}
		function changeShopName($newName){
			$sql = "DELETE FROM shopname";
			$deleteOld = mysqli_query($this->conn,$sql);
			$sql = "INSERT INTO shopname (shopname) VALUES ('$newName')";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
	}
?>