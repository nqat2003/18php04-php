<?php 
	class Controller{
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					$productModel = new Products();
					if (isset($_POST['search_form'])) {
						$keyword = $_POST['keyword'];
					}else $keyword = "";
					$listProducts = $productModel->listAll($keyword);
					include 'views/list_products.php';
					break;
				case 'single':
					$id = $_GET['id'];
					$productModel = new Products();
					$detailProducts = $productModel->details($id);
					while ($row = mysqli_fetch_array($detailProducts)) {
						$image = $row['image'];
						$name = $row['name'];
						$price = $row['price'];
						$description = $row['description'];
						$information = $row['information'];
					}
					$listSize = $productModel->listSize($name);
					include 'views/single.php';
					break;
				case 'list_products_type':
					$id = $_GET['id'];
					$productModel = new Products();
					$listProducts = $productModel->listByType($id);
					include 'views/list_products.php';
					break;
				case 'list_products_discount':
					$dis = $_GET['id'];
					$productModel = new Products();
					$listProducts = $productModel->listByDiscount($dis);
					include 'views/list_products.php';
					break;
				case 'add_cart':
					$id = $_GET['id'];
					if (isset($_SESSION['cart'][$id])){
						$_SESSION['cart'][$id]['quantity']++;
					}else{
						$productModel = new Products();
						$detailProducts = $productModel->details($id);
						$row = mysqli_fetch_array($detailProducts);
						$_SESSION['cart'][$row['id']]=array(
							"quantity" => 1,
							"price" => $row['price']
						);
					}
					if (isset($_SESSION['cart'])) {
						$sql = "SELECT * FROM products WHERE id IN(";
						foreach ($_SESSION['cart'] as $id => $value) {
							$sql.=$id.",";
						}
						$sql = substr($sql, 0,-1).")";
						$result = mysqli_query($this->conn,$sql);
						
					}
					include 'views/checkout.php';
					break;
				default:
					# code...
					break;
			}
		} 
	}
 ?>