<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">EDIT USER</h3>
	</div>
	<form class="form-horizontal" method="POST" name="update_user" action="index.php?type=user&action=update_user&id=<?php echo $id?>" enctype = "multipart/form-data">
		<div class="box-body">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" value="<?php echo $nameCurrent; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="username" value="<?php echo $usernameCurrent; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Old password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="op">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">New password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="np">
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
			<button type="submit" name="submit" class="btn btn-info pull-right">ADD</button>
		</div>
		<?php echo "$error"; ?>
	</form>
</div>