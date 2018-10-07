<?php 
	include 'models/model.php';
	class Controller{
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'add_user':
					include 'views/add_user.php';
					break;
				case 'list_user':
					include 'views/list_user.php';
					break;
				case 'add_product':
					include 'views/add_product.php';
					break;
				case 'list_product':
					include 'views/list_product.php';
					break;
				
				default:
					# code...
					break;
			}
		}
	}
?>