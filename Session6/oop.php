<?php 
	class User{
		var $name,$email,$password,$phone,$address;
		private function Add(){
			//code
		}
		private function Lista(){
			//code
		}
		function Edit(){
			//code	
		}
		function Register(){
			echo "register done!<br>";
		}
		function Login(){
			//code
		}
		function View(){
			//code
		}
		
	}
	class Customer extends User{
		var $receive_address, $customer_code;
		function Pay(){
			echo "Pay done! <br>";
		}
		function History(){
			//code
		}
	}
	$cus1 = new Customer();
	$cus1->Register();
	$cus1->Pay();
?>