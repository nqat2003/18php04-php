
	<!-- banner -->
	<!-- //banner -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="col-md-4 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/<?php echo $image; ?>">
								<div class="thumb-image"> <img src="images/<?php echo $image; ?>" data-imagezoom="true" class="img-responsive"> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<h3><?php echo $name; ?></h3>
				<p><span class="item_price">$<?php echo $price; ?></span>
					<del>$<?php echo $price*1.5; ?></del>
				</p>
				<div class="color-quality">
					<div class="color-quality-right">
						<h5>Size :</h5>
						<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
							<?php while ($row = mysqli_fetch_array($listSize)) { ?>
							<option value="<?php echo $row['size']; ?>"><?php echo $row['size']; ?></option>	
							<?php } ?>			
						</select>
					</div>
				</div>
				<div class="occasional">
					<div class="clearfix"> </div>
				</div>
				<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="index.php?action=add_cart&id=<?php echo $id; ?>" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="<?php echo $id; ?>">
							<input type="hidden" name="shoe_item" value="<?php echo $name; ?>">
							<input type="hidden" name="amount" value="<?php echo $price; ?>">
							<input type="submit" name="submit" value="Add to cart" class="button add">

							<a href="#" data-toggle="modal" data-target="#myModal1"></a>
						</form>

					</div>

				</div>
				<ul class="social-nav model-3d-0 footer-social social single_page">
					<li class="share">Share On : </li>
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>

			</div>
			<div class="clearfix"> </div>
			<!--/tabs-->
			<div class="responsive_tabs">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li>Description</li>
						<li>Information</li>
					</ul>
					<div class="resp-tabs-container">
						<!--/tab_one-->
						<div class="tab1">

							<div class="single_page">
								<h6><?php echo "$name"; ?></h6>
								<p><?php echo "$description"; ?></p>
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab3">

							<div class="single_page">
								<h6><?php echo "$name"; ?></h6>
								<p><?php echo "$information"; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div><br><a href="index.php">< Back to shop</a>
		</div>
		
	</div>
	
