<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">ADD NEW PRODUCT</h3>
	</div>
	<form class="form-horizontal" method="POST" name="add_product" action="admin.php?type=product&action=add_product" enctype = "multipart/form-data">
		<div class="box-body">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" placeholder="Name">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Price</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="price" placeholder="Price">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Desciption</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="description" placeholder="description">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Image</label>
				<div class="col-sm-10">
					<input type="file" name="image">
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" name="submit" class="btn btn-info pull-right">ADD</button>
		</div>
	</form>
</div>