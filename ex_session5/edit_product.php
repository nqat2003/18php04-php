<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit product</title>
</head>
<body>
	<h1>EDIT PRODUCT</h1>
	<?php 
		require 'connect.php';
		$id = $_GET['id']; 
		$sql = "SELECT * FROM products WHERE id = '$id'";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);
		if (isset($_POST['submit'])){
			$name = $_POST['name'];
			$price = $_POST['price'];
			$des = $_POST['description'];
			$sql = "UPDATE products SET name = '$name', price = '$price', description = '$des' WHERE id = '$id'";
			mysqli_query($con,$sql);
			header("location:list_product.php");
		}
	?>
	<form method="POST" action="#">
		<p><span>Tên sản phẩm:</span> <input type="text" name="name" value="<?php echo $row['name']; ?>"></p>
		<p><span>Giá:</span> <input type="text" name="price" value="<?php echo $row['price']; ?>"></p>
		<p><span>Mô tả:</span> <textarea name="description" rows="3" cols="22"><?php echo $row['description']; ?></textarea></p>
		<input type="submit" name="submit" value="Sửa">
	</form>
	<a href="list_product.php"><< List product</a>
</body>
</html>