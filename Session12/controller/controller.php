<?php 
	include 'config/connectdtb.php';
	include 'models/models.php';
	class Controller{
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					$model = new Model();
					$list = $model->listAll();
					include 'views/listNews.php';
					break;
				case 'details':
					$id=$_GET['id'];
					$userId = isset($_SESSION['login'])?$_SESSION['login']:'xyz';
					$model = new Model();
					$details = $model->getDetails($id);
					$listcmt = $model->getListComment($id);
					$checkLike = $model->getLike($id,$userId);
					$countLike = $model->getLike($id);
					include 'views/details.php';
					break;
				case 'add_cmt':
					$newsId = $_GET['id'];
					$userId = $_SESSION['login'];
					$content = $_POST['comment'];
					$model = new Model();
					$doAddCmt = $model->addComment($content,$newsId,$userId);
					header("Refresh:1;url=index.php?action=details&id=".$newsId);
					break;
				case 'login':
					$id = isset($_GET['id'])?$_GET['id']:'';
					if (isset($_POST['submit'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$id = $_POST['id'];
						$model = new Model();
						$result = $model->user_login($username,$password);
						if ($result->num_rows){
							while ($row = mysqli_fetch_array($result)) {
								$_SESSION['login'] = $row['id'];
							}
							echo "Đăng nhập thành công, bấm <a style = 'color:blue' href='index.php?action=details&id=$id'>vào đây</a> để quay lại";
						}else
						echo "Sai tên đăng nhập/mật khẩu. <a style = 'color:blue' href='index.php?action=login&id=$id'>Đăng nhập lại</a>";
					}else{
						include 'views/login.php';
					}
					break;
				case 'like':
					$id = $_GET['id'];
					$model = new Model();
					$result = $model->userLike($id,$_SESSION['login']);
					header("Refresh:1;url=index.php?action=details&id=".$id);
				default:
					# code...
					break;
			}
		}
	}
?>