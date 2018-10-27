<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">ADD NEW USER</h3>
	</div>
	<form class="form-horizontal" method="POST" name="add_user" action="index.php?action=add_user" enctype = "multipart/form-data">
		<div class="box-body">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
			</div>
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
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Avatar</label>
				<div class="col-sm-10">
					<input type="file" name="image">
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" name="submit" class="btn btn-info pull-right" onclick="return checkForm();">ADD</button>
		</div>
	</form>
</div>
<script type="text/javascript" src="js/Validate.js"></script>