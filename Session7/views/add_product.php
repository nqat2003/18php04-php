<?php 
	include 'connectdtb.php'; 
	$check = false;
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];
		$des = $_POST['des'];
		$sql = "INSERT INTO products (name,price,description) VALUES ('$name','$price','$des')";
		if(mysqli_query($con,$sql)){
			$check = true;
		}
		else
			echo "<b>Error: " . $sql . "<br>" . mysqli_error($con)."</b>";
	}
	if (!$check){
?>
<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">ADD NEW USER</h3>
	</div>
	<form class="form-horizontal" method="POST" name="adduser" action="">
		<div class="box-body">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Price</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="price" placeholder="Price">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Desciption</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="des" placeholder="Desciption">
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" name="submit" class="btn btn-info pull-right" onclick="return checkForm();">ADD</button>
		</div>
	</form>
</div>
<?php  
	}else{
?>
<br>
<p>Add product successful! 
	<a href="index.php?action=list_product">View List</a> or 
	<a href="index.php?action=add_product">Add another product</a>
</p>
<?php } ?>
<script type="text/javascript" src="js/Validate.js"></script>