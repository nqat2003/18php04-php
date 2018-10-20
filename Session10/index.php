<?php 
	session_start();
	include 'controller/controller.php';
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
	<a href="index.php?action=home">HOMEPAGE</a> | 
	<a href="index.php?action=home&category_name=Apple">Apple</a>
	  |	
	<a href="index.php?action=home&category_name=Samsung">Samsung</a>
	  |	
	<a href="index.php?action=home&category_name=Oppo">Oppo</a>
	|
	<a href="index.php?action=home&category_name=Xiaomi">Xiaomi</a>
	|
	<a href="index.php?action=home&category_name=Sony">Sony</a>
	<?php 
	    $controller = new Controller();
	    $controller->handleRequest();
	?>	
</body>
</html>