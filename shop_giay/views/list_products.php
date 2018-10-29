<?php
	if (count($listProducts)) {
	while ($row = mysqli_fetch_array($listProducts)) {
		
?>
<div class="col-md-4 product-men">
	<div class="product-shoe-info shoe">
		<div class="men-pro-item">
			<div class="men-thumb-item">
				<img src="images/<?php echo $row['image']; ?>" alt="">
				<div class="men-cart-pro">
					<div class="inner-men-cart-pro">
						<a href="index.php?action=single&id=<?php echo $row['id']; ?>" class="link-product-add-cart">View Details</a>
					</div>
				</div>
				<span class="product-new-top">New</span>
			</div>
			<div class="item-info-product">
				<h4>
					<a href="single.html"><?php echo $row['name']; ?> </a>
				</h4>
				<div class="info-product-price">
					<div class="grid_meta">
						<div class="product_price">
							<div class="grid-price ">
								<span class="money ">$<?php echo $row['price']; ?></span>
							</div>
						</div>
						<!-- <ul class="stars">
							<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
						</ul> -->
					</div>
					<div class="shoe single-item hvr-outline-out">
						<form action="index.php?action=add_cart&id=<?php echo $row['id']; ?>" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">
							<input type="hidden" name="shoe_item" value="<?php echo $row['name']; ?>">
							<input type="hidden" name="amount" value="<?php echo $row['price']; ?>">
							<button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus"></i></button>

							<!-- <a href="#" data-toggle="modal" data-target="#myModal1"></a> -->
						</form>

					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php } } ?>