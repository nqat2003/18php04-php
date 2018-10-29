<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">ADD NEW CATEGORY</h3>
	</div>
	<form class="form-horizontal" method="POST" name="add_type" action="index.php?action=add_type" enctype = "multipart/form-data">
		<div class="box-body">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" name="submit" class="btn btn-info pull-right">ADD</button>
		</div>
	</form>
</div>
<script type="text/javascript" src="js/Validate.js"></script>