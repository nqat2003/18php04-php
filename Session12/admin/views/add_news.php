<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">ADD NEW PRODUCT</h3>
	</div>
	<form class="form-horizontal" method="POST" name="add_product" action="index.php?action=add_news" enctype = "multipart/form-data">
		<div class="box-body">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="title" placeholder="Name">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Desciption</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="description" placeholder="Price">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Content</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="content" placeholder="Color">
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