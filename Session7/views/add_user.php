<?php 
	include 'connectdtb.php'; 
	$check = false;
	if (isset($_POST['submit'])) {
		$user = $_POST['username'];
		$pass = md5(trim($_POST['pass']));
		$sql = "INSERT INTO user (user,pass) VALUES ('$user','$pass')";
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
				<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="username" placeholder="Username">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Password</label>

				<div class="col-sm-10">
					<input type="password" class="form-control" name="pass" placeholder="Password">
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
	<p>Add user successful! 
		<a href="index.php?action=list_user">View List</a> or 
		<a href="index.php?action=add_user">Add another user</a>
	</p>
<?php } ?>
<script type="text/javascript" src="js/Validate.js"></script>