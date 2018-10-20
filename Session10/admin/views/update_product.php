<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">EDIT PRODUCT</h3>
	</div>
	<form class="form-horizontal" method="POST" name="update_product" action="index.php?action=update_product&id=<?php echo $id?>" enctype = "multipart/form-data">
		<div class="box-body">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" value="<?php echo $nameCurrent; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Price</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="price" value="<?php echo $priceCurrent; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Description</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="description" value="<?php echo $desCurrent; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Danh mục</label>
				<div class="col-sm-10">
					<select name="category">
						<?php 
							echo "<option value=$cateName selected>$cateName</option>";
							while ($row = mysqli_fetch_array($listCategory)) {
								echo "<option value='{$row['name']}'>".$row['name']."</option>" ;
						} ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Image</label>
				<div class="col-sm-10">
					<img class="review" src="imguploads/product/<?php echo $CurrentImg; ?>">
					<input type="file" name="image">
				</div>
			</div>
		</div>
		<div class="box-footer">
			<button type="submit" name="submit" class="btn btn-info pull-right">UPDATE</button>
		</div>
	</form>
</div>