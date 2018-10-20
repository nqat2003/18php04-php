<?php   
	include 'config/connectdtb.php';
	include 'models/product.php';
	include 'models/user.php';
	class Controller{
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'list_product':
					$product = new Product();
					$listProduct = $product->getListProduct();
					include 'views/frontend_listproduct.php';
					break;
				default:
					header("location:index.php?action=list_product");
					break;
			}
		}
	}
?>