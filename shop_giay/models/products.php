<?php  
	class Products extends ConnectDTB{
		function listAll($keyword = ''){
			if ($keyword == '')
				$sql = "SELECT * FROM products";
			else
				$sql = "SELECT * FROM products 
						INNER JOIN type ON products.type = type.id
						WHERE products.name LIKE '%$keyword%' OR type.name LIKE '%$keyword%' OR products.color LIKE '%$keyword%'";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function details($id){
			$sql = "SELECT * FROM products WHERE id = '$id'";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function listType(){
			$sql = "SELECT * FROM type";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function listByType($id){
			$sql = "SELECT * FROM products WHERE type = '$id'";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function listByDiscount($dis){
			$sql = "SELECT * FROM products WHERE discount >= '$dis'";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function listHot(){
			$sql = "SELECT * FROM products WHERE hot = 1 LIMIT 5";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		function listSize($name){
			$sql = "SELECT * FROM products WHERE name = '$name'";
			$result	= mysqli_query($this->conn,$sql);
			return $result;
		}
		function getBanner(){
			$sql = "SELECT * FROM banner";
	  		$result = mysqli_query($this->conn,$sql);
	  		return $result;
		}
		function getCart($cart){
			$sql = "SELECT * FROM products WHERE id IN(";
			foreach ($cart as $id => $value) {
				$sql.=$id.",";
			}
			$sql = substr($sql, 0,-1).")";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}
		
	}
?>