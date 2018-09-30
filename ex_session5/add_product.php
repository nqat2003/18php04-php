<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADD Product</title>
	<style type="text/css">
		span{
			display: inline-block;
			width: 100px;
		}
		b{
			color: red;
		}
	</style>
</head>
<body>
	<h1>THÊM SẢN PHẨM</h1>
	<?php  
		require 'connect.php';
		$name = $price = $description = "";
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$price = $_POST['price'];
			$description = $_POST['description'];
			if ($name == "" | $price == "" | $description == ""){
				echo "<b>Vui lòng nhập đầy đủ thông tin</b>";
			}
			else{
				if (!is_numeric($price)) {
					echo "<b>Giá phải là số</b>";
				}else{
					$sql = "INSERT INTO products (`name`,`price`,`description`) values ('$name','$price','$description')";
					if(mysqli_query($con,$sql)){
						header("location:list_product.php");
					}
					else
						echo "<b>Error: " . $sql . "<br>" . mysqli_error($con)."</b>";
				}
				
			}
		}
	?>
	<form method="POST" action="#">
		<p><span>Tên sản phẩm:</span> <input type="text" name="name" value="<?php echo $name; ?>"></p>
		<p><span>Giá:</span> <input type="text" name="price" value="<?php echo $price; ?>"></p>
		<p><span>Mô tả:</span> <textarea name="description" rows="3" cols="22"><?php echo $description; ?></textarea></p>
		<input type="submit" name="submit">
	</form>
	<a href="list_product.php"><< List product</a>
</body>
</html>