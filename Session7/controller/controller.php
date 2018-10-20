<?php 
include 'config/connectdtb.php';
include 'models/product.php';
include 'models/user.php';
class Controller{
	function handleRequest(){
		$action = isset($_GET['action'])?$_GET['action']:'home';
		$type = isset($_GET['type'])?$_GET['type']:'home';
		switch ($type) {
			case 'user':
				switch ($action) {
					case 'add_user':
						if (!isset($_SESSION['login'])) {
							header("location:login.php");
						}
						if (isset($_POST['submit'])) {
							$name = $_POST['name'];
							$username = $_POST['username'];
							$pass = $_POST['pass'];
							$avatar = $_FILES['image']['name'];
							$target_dir = "imguploads/user/" . basename($_FILES["image"]["name"]);
							move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
							$user = new User();
							$user->InsertUser($name,$username,$pass,$avatar);
							header("location:admin.php?type=user&action=list_user");
						}
						include 'views/add_user.php';
						break;
					case 'list_user':
						if (!isset($_SESSION['login'])) {
							header("location:login.php");
						}
						$user = new user();
						$listUser = $user->listUser();
						include 'views/list_user.php';
						break;
					case 'delete_user':
						if (!isset($_SESSION['login'])) {
							header("location:login.php");
						}
						$id = $_GET['id'];
						$user = new User();
						$user->deleteUser($id);
						header("location:admin.php?type=user&action=list_user");
						break;
					case 'update_user':
						if (!isset($_SESSION['login'])) {
							header("location:login.php");
						}
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
								header("location:admin.php?type=user&action=list_user");
							}
						}
						include 'views/update_user.php';
						break;
					case 'login':
						if (isset($_POST['submit'])) {
							$username = $_POST['username'];
							$pass = $_POST['pass'];
							$user = new User();
							$checkLogin = $user->userLogin($username,$pass);
							if ($checkLogin->num_rows){
								while ($row = mysqli_fetch_array($checkLogin)) {
									$_SESSION['login'] = $row['username'];
									$_SESSION['avatar'] = $row['avatar'];
									$_SESSION['name'] = $row['name'];
								}
								header("location:admin.php?type=user&action=list_user");
							}else{
								header("location: login.php");
							}
						}
						break;
					case 'sign_out':
						session_destroy();
						header("location:login.php"); 
					break;
					default:
						
					break;
				}
			break;
			case 'product':
				switch ($action) {
					case 'add_product':
						if (!isset($_SESSION['login'])) {
							header("location:login.php");
						}
						if (isset($_POST['submit'])){
							$name = $_POST['name'];
							$price = $_POST['price'];
							$description = $_POST['description'];
							$image = $_FILES['image']['name'];
							$target_dir = "imguploads/product/" . uniqid().$image;
							move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
							$product = new Product();
							$product->InsertProduct($name,$price,$image,$description);
							header("location:admin.php?type=product&action=list_product");
						}
						include 'views/add_product.php';
						break;
					case 'list_product':
						if (!isset($_SESSION['login'])) {
							header("location:login.php");
						}
						$product = new Product();
						$listproduct = $product->getListProduct();
						include 'views/list_product.php';
						break;
					case 'delete_product':
						if (!isset($_SESSION['login'])) {
							header("location:login.php");
						}
						$id = $_GET['id'];
						$product = new Product();
						$product->deleteProduct($id);
						header("location:admin.php?type=product&action=list_product");
						break;
					case 'update_product':
						if (!isset($_SESSION['login'])) {
							header("location:login.php");
						}
						$id = $_GET['id'];
						$product = new Product();
						$productCurrent = $product->getListProduct($id);
						while ($row = mysqli_fetch_array($productCurrent)) {
							$nameCurrent = $row['name'];
							$priceCurrent = $row['price'];
							$imgCurrent = $row['image'];
							$desCurrent = $row['description'];
						}
						if (isset($_POST['submit'])) {
							$name = $_POST['name'];
							$price = $_POST['price'];
							$description = $_POST['description'];
							if (isset($_FILES['image']['name'])){
								$img = $_FILES['image']['name'];
								$target_dir = "imguploads/product/" .uniqid().$img;
								move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
							}else $img = $imgCurrent;
							$product->editProduct($name,$price,$img,$description,$id);
							header("location:admin.php?type=product&action=list_product");
						}
						include 'views/update_product.php';
						break;
					default:
						# code...
					break;
				}
			break;
			default:
				header("location:login.php");
			break;
		}
		
	}
}
?>