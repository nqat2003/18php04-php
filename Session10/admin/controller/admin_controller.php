<?php
include 'config/connectdtb.php'; 
include 'models/product.php';
include 'models/user.php';
class Controller{
	function handleRequest(){
		$action = isset($_GET['action'])?$_GET['action']:'home';
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
					header("location:index.php?action=list_user");
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
				header("location:index.php?action=list_user");
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
					$img = $row['avatar'];
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
						header("location:index.php?action=list_user");
						}
					}
				include 'views/update_user.php';
				break;
			case 'login':
				if (isset($_POST['submit'])) {
					$username = $_POST['username'];
					$pass = $_POST['pass'];
					$user = new User();
					if ($user->userLogin($username,$pass)){
						$userInfo = $user->getUserInfoByLogin($username,$pass);
						while ($row = mysqli_fetch_array($userInfo)) {
							$_SESSION['login'] = $row['username'];
							$_SESSION['avatar'] = $row['avatar'];
							$_SESSION['name'] = $row['name'];
						}
						header("location:index.php");
					}else{
						header("location: login.php");
					}
				}
				break;
			case 'sign_out':
				session_destroy();
				header("location:login.php"); 
				break;
			case 'add_product':
				if (!isset($_SESSION['login'])) {
					header("location:login.php");
				}
				$product = new Product();
				$listCategory = $product->getCategory();
				if (isset($_POST['submit'])){
					$name = $_POST['name'];
					$price = $_POST['price'];
					$description = $_POST['description'];
					$categoryId = $_POST['category'];
					$image = $_FILES['image']['name'];
					$target_dir = "imguploads/product/" . uniqid().$image;
					move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
					$product->InsertProduct($name,$price,$image,$description,$categoryId);
					header("location:index.php?action=list_product");
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
				header("location:index.php?action=list_product");
				break;
			case 'update_product':
				if (!isset($_SESSION['login'])) {
					header("location:login.php");
				}
				$id = $_GET['id'];
				$product = new Product();
				$productCurrent = $product->getProductInfo($id);
				while ($row = mysqli_fetch_array($productCurrent)) {
					$nameCurrent = $row['name'];
					$priceCurrent = $row['price'];
					$CurrentImg = $row['image'];
					$desCurrent = $row['description'];
					$cateName = $row['category'];
				}
				$listCategory = $product->getCategoryForUpdateForm($cateName);
				if (isset($_POST['submit'])) {
					$name = $_POST['name'];
					$price = $_POST['price'];
					$description = $_POST['description'];
					$cate = $_POST['category'];
					if (!empty($_FILES['image']['name'])){
						$imagesName = $_FILES['image']['name'];
						$img = uniqid().basename($img);
						$target_dir = "imguploads/product/" .$img;
						move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
					}else $img = $CurrentImg;
					$product->editProduct($name,$price,$img,$description,$id,$cate);
					header("location:index.php?action=list_product");
				}
				include 'views/update_product.php';
				break;
			default:
				# code...
			break;
		}
	}
}
?>