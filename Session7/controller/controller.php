<?php 
class Controller{
	function handleRequest(){
		$action = isset($_GET['action'])?$_GET['action']:'home';
		$type = isset($_GET['type'])?$_GET['type']:'home';
		switch ($type) {
			case 'user':
				include 'models/user.php';
				switch ($action) {
					case 'add_user':
						if (isset($_POST['submit'])) {
							$name = $_POST['name'];
							$username = $_POST['username'];
							$pass = $_POST['pass'];
							$avatar = $_FILES['image']['name'];
							$target_dir = "imguploads/user/" . basename($_FILES["image"]["name"]);
							move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
							$user = new User();
							$user->InsertUser($name,$username,$pass,$avatar);
							header("location:index.php?type=user&action=list_user");
						}
						include 'views/add_user.php';
						break;
					case 'list_user':
						$user = new user();
						$listUser = $user->listUser();
						include 'views/list_user.php';
						break;
					case 'delete_user':
						$id = $_GET['id'];
						$user = new User();
						$user->deleteUser($id);
						header("location:index.php?type=user&action=list_user");
						break;
					case 'update_user':
						$error = "";
						$id = $_GET['id'];
						$user = new User();
						$userCurrent = $user->getUserInfo($id);
						while ($row = mysqli_fetch_array($userCurrent)) {
							$nameCurrent = $row['name'];
							$usernameCurrent = $row['username'];
							$passCurrent = $row['pass'];
							$avatarCurrent = $row['avatar'];
						}
						if (isset($_POST['submit'])) {
							$name = $_POST['name'];
							$username= $_POST['username'];
							$op = $_POST['op'];
							$np = $_POST['np'];
							$avatar = isset($_FILES['image']['name'])?$_FILES['image']['name']:$avatarCurrent;
							if ($op != $passCurrent) {
							 	$error = "error";
							} else{
								$target_dir = "imguploads/user/" . basename($_FILES["image"]["name"]);
								move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
								$user->updateUser($name,$username,$np,$avatar,$id);
								header("location:index.php?type=user&action=list_user");
							}
						}
						include 'views/update_user.php';
				}
			break;
			case 'product':
			include 'models/product.php';
				switch ($action) {
					case 'add_product':
						if (isset($_POST['submit'])){
							$name = $_POST['name'];
							$price = $_POST['price'];
							$image = $_FILES['image']['name'];
							$target_dir = "imguploads/product/" . basename($_FILES["image"]["name"]);
							move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
							$product = new Product();
							$product->InsertProduct($name,$price,$image);
							header("location:index.php?type=product&action=list_product");
						}
						include 'views/add_product.php';
						break;
					case 'list_product':
						$product = new Product();
						$listproduct = $product->getListProduct();
						include 'views/list_product.php';
						break;
					case 'delete_product':
						$id = $_GET['id'];
						$product = new Product();
						$product->deleteProduct($id);
						header("location:index.php?type=product&action=list_product");
						break;
					case 'update_product':
						$id = $_GET['id'];
						$product = new Product();
						$productCurrent = $product->getListProduct($id);
						while ($row = mysqli_fetch_array($productCurrent)) {
							$nameCurrent = $row['name'];
							$priceCurrent = $row['price'];
							$imgCurrent = $row['image'];
						}
						if (isset($_POST['submit'])) {
							$name = $_POST['name'];
							$price = $_POST['price'];
							if (isset($_FILES['image']['name'])){
								$img = $_FILES['image']['name'];
								$target_dir = "imguploads/product/" . basename($img);
								move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
							}else $img = $imgCurrent;
							$product->editProduct($name,$price,$img,$id);
							header("location:index.php?type=product&action=list_product");
						}
						include 'views/update_product.php';
						break;
					default:
						# code...
					break;
				}
			break;
			default:
					# code...
			break;
		}
		
	}
}
?>