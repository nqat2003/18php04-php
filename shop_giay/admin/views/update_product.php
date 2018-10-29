<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">UPDATE PRODUCT ID <?php echo "$id"; ?></h3>
	</div>
	<form class="form-horizontal" method="POST" name="add_product" action="index.php?action=add_product" enctype = "multipart/form-data">
		<div class="box-body">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" value="<?php echo $currentName; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Price</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="price" placeholder="Price" value="<?php echo $currentPrice; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Color</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="color" placeholder="Color" value="<?php echo $currentColor; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Discount</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="discount" placeholder="Discount" value="<?php echo $currentDiscount.' %'; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Size</label>
				<div class="col-sm-10">
					<select name="size">
						<?php for ($i=35;$i<=44;$i++){ ?>
						<option <?php echo $currentSize==$i?"selected":''; ?>><?php echo $i; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Hot</label>
				<div class="col-sm-10">
					<select name="hot">
						<option <?php echo $currentHot==1?"selected":''; ?>>yes</option>
						<option <?php echo $currentHot==0?"selected":'';?>>no</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Categology</label>
				<div class="col-sm-10">
					<select name="category">
						<?php while ($row = mysqli_fetch_array($listCategory)) {
							echo "<option value='{$row['id']}' ";
							echo $row['name']==$currentType?'selected':'';
							echo ">".$row['name']."</option>" ;
						} ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Desciption</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="description" value="<?php echo $currentDes; ?>">
				</div>	
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Information</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="information" value="<?php echo $currentInf; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword3" class="col-sm-2 control-label">Image</label>
				<div class="col-sm-10">
					<input type="file" name="image">
				</div>
				<img src="../images/<?php echo $currentImg; ?>" style="width: 100px; height: 100px;">
			</div>
			
		</div>
		<div class="box-footer">
			<button type="submit" name="submit" class="btn btn-info pull-right">ADD</button>
		</div>
	</form>
</div>