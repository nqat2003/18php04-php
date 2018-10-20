<?php 
	include 'admin/config/connectdtb.php';
	include 'admin/models/user.php';
	include 'admin/models/product.php';
	class Controller {
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			$category_name = isset($_GET['category_name'])?$_GET['category_name']:'';	
			$product = new Product();
			$listProduct =$product->getListProduct($category_name);
			include 'views/home.php';
		}
	}
?>