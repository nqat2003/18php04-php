<?php  
	include 'connectdtb.php';
	include 'models/user.php';
	include 'models/product.php';
	include 'models/news.php';
	include 'models/general.php';
	class Controller{
		function handleRequest(){
			$action = 'delete_user';
			switch ($action) {
				//---------- user zone
				case 'add_user':
					$name = 'test2';
					$pass = 1;
					$avatar = 'test.jpg';
					$this->addUser($name,$pass,$avatar);
					break;
				case 'list_user':
					$listUser = $this->listTable('users');
					include 'views/list_users.php';
					break;
				case 'update_user':
					$name = 'test3';
					$pass = 2;
					$avatar = 'testupdate.jpg';
					$this->updateUser($name,$pass,$avatar,2);
					break;
				case 'delete_user':
					$this->delete('users',2);
					break;

				// -------- product zone
				case 'add_product':
				case 'list_product':
				case 'update_product':
				case 'delete_product':
				// --------- new zone
				case 'add_news':
				case 'list_news':
				case 'update_news':
				case 'delete_news':
				default:
					# code...
					break;
			}
		}
		function addUser($name,$pass,$ava){
			$user = new User();
			return $user->insertUser($name,$pass,$ava);
		}
		function updateUser($name,$pass,$ava,$id){
			$user = new User();
			return $user->updateUser($name,$pass,$ava,$id);
		}
		function listTable($table){
			switch ($table) {
				case 'users':
					$user = new General();
					$listUser = $user->showAll('users');
					return $listUser;
					break;
				
				default:
					# code...
					break;
			}
		}
		function delete($table,$id){
			switch ($table) {
				case 'users':
					$user = new General();
					$deleteUser = $user->delete('users',$id);
					return 1;
					break;
				
				default:
					# code...
					break;
			}
		}
		function direction($string){
			$location = "location:".$string;
			return header($location);
		}
	}
?>