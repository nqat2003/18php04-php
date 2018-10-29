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
					$productModel = new Products();
					if (!isset($_GET['id'])){
						$_SESSION['cart_details'] = $productModel->getCart($_SESSION['cart']);
						include 'views/checkout.php';
					}else{
						$id = $_GET['id'];
						if (isset($_SESSION['cart'][$id])){
							$_SESSION['cart'][$id]['quantity']++;
						}else{
							$detailProducts = $productModel->details($id);
							$row = mysqli_fetch_array($detailProducts);
							$_SESSION['cart'][$row['id']]=array(
								"quantity" => 1,
								"price" => $row['price']
							);
						}
						$_SESSION['cart_details'] = $productModel->getCart($_SESSION['cart']);
						include 'views/checkout.php';
					}
					break;
				case "plus":
					$id = $_GET['id'];
					$productModel = new Products();
					$_SESSION['cart'][$id]['quantity']++;
					$_SESSION['cart_details'] = $productModel->getCart($_SESSION['cart']);
					include 'views/checkout.php';
					break;
				case "minus":
					$id = $_GET['id'];
					$productModel = new Products();
					$_SESSION['cart'][$id]['quantity']--;
					$_SESSION['cart_details'] = $productModel->getCart($_SESSION['cart']);
					include 'views/checkout.php';
					break;
				case 'delete':
					$id = $_GET['id'];
					$productModel = new Products();
					unset($_SESSION['cart'][$id]);
					$_SESSION['cart_details'] = $productModel->getCart($_SESSION['cart']);
					include 'views/checkout.php';
					break;
				case 'payment':
					$name = $_POST['name'];
					$addr = $_POST['addr'];
					$phone = $_POST['phone'];
					$city = $_POST['city'];
					include 'views/payment.php';
					break;
				case 'endpay':
					$name = $_POST['name'];
					$addr = $_POST['addr'];
					$phone = $_POST['phone'];
					$city = $_POST['city'];
					$cusModel = new Customer();
					$addCus = $cusModel->saveCus($name,$addr,$phone,$city);
					$idCus = $cusModel->getCusId($name,$phone);
					$saveCart = $cusModel->saveCart($_SESSION['cart'],$idCus);
					unset($_SESSION['cart']);
					echo "<h2>Order success</h2>";
					echo "<a href='index.php?action=home'>Continue to shopping</a> or ";
					echo "<a href='404.html'>Views your payment</a>";
					break;
				default:
					# code...
					break;
			}
		} 
	}
 ?>