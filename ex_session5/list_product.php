<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LIST PRODUCT</title>
	<style type="text/css">
		table,tr,th,td{
			border: 1px solid black;
		}
		table {
			border-collapse: collapse;
			width: 600px;
			text-align: center;
		}
		a{
			font-size: small;
		}
</style>
</head>
<body>
	<?php  
		require 'connect.php';
		$name = "";
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
		} 
	?>
	<h1>LIST PRODUCT</h1>
	<form method="POST" action="#">
		<p>Search for name or description: 
			<input type="text" name="name">
			<input type="submit" name="submit" value="Search">
			<input type="submit" name="show" value="Show all">
		</p>	
	</form><br>
	<table>
		<tr>
			<th>Tên sản phẩm</th>
			<th>Giá</th>
			<th>Mô tả</th>
			
		</tr>
		<?php
			if (isset($_POST['show'])) {
				$name = "";
			}
			if ($name == "") {
				$sql = 'select * from products';
			}else{
				$name = $_POST['name'];
				$sql = "SELECT * FROM products WHERE name like '%$name%' or description like '%$name%'";
			}
			$result = mysqli_query($con,$sql);
			while ($row = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['price'] . " VNĐ"; ?></td>
			<td><?php echo $row['description']; ?></td>
			<td>
				<?php echo "<a href='edit_product.php?id={$row['id']}'>EDIT</a> | "; ?>
				<?php echo "<a href='delete_product.php?id={$row['id']}'>DELETE</a>"; ?>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="3"><a href="add_product.php">ADD</a></td>
		</tr>
	</table>
</body>
</html>