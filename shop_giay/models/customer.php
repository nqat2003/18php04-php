<?php  
	class Customer extends ConnectDTB{
		function saveCus($name,$addr,$phone,$city){
			$sql = "SELECT * FROM `customers` WHERE name = '$name' AND phone = '$phone'";
			$result = mysqli_query($this->conn,$sql);
			if ($result->num_rows==0){
				$sql = "INSERT INTO `customers`(`name`, `addr`, `city`, `phone`) VALUES ('$name','$addr','$city','$phone')";
				$result = mysqli_query($this->conn,$sql);
			}else{
				return 0;
			}
		}
		function getCusId($name,$phone){
			$sql = "SELECT * FROM `customers` WHERE name = '$name' AND phone = '$phone'";
			$result = mysqli_query($this->conn,$sql);
			$row = mysqli_fetch_array($result);
			return $row['id'];
		}
		function saveCart($cart,$cusId){
				foreach ($cart as $k => $v) {
					$quantity = $v['quantity'];
					$sql = "INSERT INTO orders (productID,customerID,quantity) VALUES ('$k','$cusId','$quantity')";
					mysqli_query($this->conn,$sql);
				}
		}

	}
?>
