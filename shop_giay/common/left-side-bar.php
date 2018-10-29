<div class="side-bar col-md-3">
	<div class="search-hotel">
		<h3 class="agileits-sear-head">Search Here..</h3>
		<form action="index.php?action=home" method="post">
			<input type="search" placeholder="Product name..." name="keyword" >
			<input type="submit" name="search_form" value=" ">
		</form>
	</div>
	<div class="left-side">
		<h3 class="agileits-sear-head">Products</h3>
		<ul>
			<?php 	
				$productModel = new Products();
				$listType = $productModel->listType();
				$listHot = $productModel->listHot();
				while ($row = mysqli_fetch_array($listType)) {	
			?>
			<li>
				<a href="index.php?action=list_products_type&id=<?php echo $row['id']; ?>" style="color: black">
				&#9679;
				<span class="span"><?php echo $row['name']; ?></span></a>
			</li>
			<?php } ?>
		</ul>
	</div>

	<div class="left-side">
		<h3 class="agileits-sear-head">Discount</h3>
		<ul>
			<?php  
				for ($i = 10; $i <= 60; $i+=10 ) {
			?>
			<li>
				<a href="index.php?action=list_products_discount&id=<?php echo $i; ?>" style="color: black">
				&#9679;
				<span class="span"><?php echo $i; ?>% or More</span>
			</li>
			<?php } ?>
		</ul>
	</div>

	<div class="deal-leftmk left-side">
		<h3 class="agileits-sear-head">Hot Deals</h3>
		<?php while ($row = mysqli_fetch_array($listHot)) {
			# code...
		 ?>
		 <a href="index.php?action=single&id=<?php echo $row['id']; ?>">
		<div class="special-sec1">
			<div class="col-xs-4 img-deals">
				<img src="images/<?php echo $row['image']; ?>" alt="">
			</div>
			<div class="col-xs-8 img-deal1">
				<h3><?php echo $row['name']; ?></h3>
				<a >$<?php echo $row['price']; ?></a>
			</div>
			<div class="clearfix"></div>
		</div>
		</a>
		<?php } ?>
		</div>
	
				<!-- //deals -->