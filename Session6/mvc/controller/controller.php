<?php 
	include 'model/model.php';
	class Controller{
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					$model = new model();
					$home = $model->getHomePage();
					include 'view/home.php';
					break;
				
				case 'about':
					$model = new model();
					$about = $model->getAboutPage();
					include 'view/about.php';
					break;
				case 'contact':
					$model = new model();
					$contact = $model->getContactPage();
					include 'view/contact.php';
					break;
				case 'news':
					$model = new model();
					$news = $model->getNewsPage();
					include 'view/news.php';
					break;
				default:
					# code...
					break;
			}
		}
	}
?>