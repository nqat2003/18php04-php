<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Change Shop Name</h3>
	</div>
	<form class="form-horizontal" method="POST" name="add_user" action="index.php?action=change_name" enctype = "multipart/form-data">
		<div class="box-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">Current Shop Name:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" value="<?php echo $shopname;?>" disabled>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">New name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" name="submit" class="btn btn-info pull-right">Change</button>
		</div>
	</form>
</div>
<script type="text/javascript" src="js/Validate.js"></script>