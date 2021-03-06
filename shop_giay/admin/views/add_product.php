<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">ADD NEW PRODUCT</h3>
	</div>
	<form class="form-horizontal" method="POST" name="add_product" action="index.php?action=add_product" enctype = "multipart/form-data">
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
				<label for="inputEmail3" class="col-sm-2 control-label">Color</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="color" placeholder="Color">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Discount</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="discount" placeholder="Discount">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Size</label>
				<div class="col-sm-10">
					<select name="size">
						<?php for ($i=35;$i<=44;$i++){ ?>
						<option><?php echo $i; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Hot</label>
				<div class="col-sm-10">
					<select name="hot">
						<option>yes</option>
						<option>no</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Categology</label>
				<div class="col-sm-10">
					<select name="category">
						<?php while ($row = mysqli_fetch_array($listCategory)) {
							echo "<option value='{$row['id']}'>".$row['name']."</option>" ;
						} ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Desciption</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="description" placeholder="description">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Information</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="information" placeholder="Information">
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