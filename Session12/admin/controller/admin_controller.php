<?php
include '../config/connectdtb.php'; 
include 'models/news.php';
include 'models/user.php';
class Controller{
	function handleRequest(){
		$action = isset($_GET['action'])?$_GET['action']:'home';
		switch ($action) {
			case 'add_user':
				// if (!isset($_SESSION['login'])) {
				// 	header("location:login.php");
				// }
				if (isset($_POST['submit'])) {
					$name = $_POST['name'];
					$username = $_POST['username'];
					$pass = $_POST['password'];
					$avatar = $_FILES['avatar']['name'];
					$role = $_POST['role'];
					$target_dir = "../images/users/" . basename($_FILES["image"]["name"]);
					move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
					$user = new User();
					$user->InsertUser($name,$username,$pass,$avatar,$role);
					header("location:index.php?action=list_user");
				}
				include 'views/add_user.php';
				break;
			case 'list_user':
				// if (!isset($_SESSION['login'])) {
				// 	header("location:login.php");
				// }
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
						$target_dir = "../images/user/" . basename($_FILES["image"]["name"]);
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
							$_SESSION['name'] = $row['name'];
						}
						header("location:index.php");
					}else{
						header("location:login.php");
					}
				}
				header('login.php');
				break;
			case 'sign_out':
				session_destroy();
				unset($_SESSION['login']); 
				break;
			case 'add_news':
				// if (!isset($_SESSION['login'])) {
				// 	header("location:login.php");
				// }
				$news = new News();
				if (isset($_POST['submit'])){
					$title = $_POST['title'];
					$description = $_POST['description'];
					$content = $_POST['content'];
					$image = uniqid().$_FILES['image']['name'];
					$target_dir = "../images/" . $image;
					if ($news->InsertNews($title,$description,$content,$image))
						move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
					header("location:index.php?action=list_news");
				}
				include 'views/add_news.php';
				break;
			case 'list_news':
				// if (!isset($_SESSION['login'])) {
				// 	header("location:login.php");
				// }
				$news = new News();
				$listproduct = $news->getListNews();
				include 'views/list_news.php';
				break;
			case 'delete_news':
				// if (!isset($_SESSION['login'])) {
				// 	header("location:login.php");
				// }
				$id = $_GET['id'];
				$news = new News();
				$news->deleteNews($id);
				header("location:index.php?action=list_news");
				break;
			case 'update_news':
				// if (!isset($_SESSION['login'])) {
				// 	header("location:login.php");
				// }
				$id = $_GET['id'];
				$news = new News();
				$newsCurrent = $news->getNewsInfo($id);
				while ($row = mysqli_fetch_array($newsCurrent)) {
					$currentName = $row['name'];
					$currentPrice = $row['price'];
					$currentImg = $row['image'];
					$currentDes = $row['description'];
					$currentType = $row['nametype'];
					$currentColor = $row['color'];
					$currentHot = $row['hot'];
					$currentDiscount = $row['discount'];
					$currentInf = $row['information'];
					$currentSize = $row['size'];
				}
				$listCategory = $news->getCategory();
				if (isset($_POST['submit'])) {
					$name = $_POST['name'];
					$price = $_POST['price'];
					$description = $_POST['description'];
					$type = $_POST['type'];
					$color = $_POST['color'];
					$hot = $_POST['hot'];
					$discount = $_POST['discount'];
					$info = $_POST['information'];
					$size = $_POST['size'];
					if (!empty($_FILES['image']['name'])){
						$imagesName = $_FILES['image']['name'];
						$img = uniqid().basename($img);
						$target_dir = "../images//" .$img;
						move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
						unlink("../images//".$currentImg);
					}else $img = $currentImg;
					$news->editNews($name,$price,$description,$type,$color,$hot,$discount,$info,$size,$img,$id);
					header("location:index.php?action=list_news");
				}
				include 'views/update_news.php';
				break;
			default:
				# code...
			break;
		}
	}
}
?>