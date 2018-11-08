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
					$model = new Model();
					$details = $model->getDetails($id);
					include 'views/details.php';
					break;
				default:
					# code...
					break;
			}
		}
	}
?>