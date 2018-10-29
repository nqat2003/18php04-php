
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Chec<span>kout</span></h3>
				<div class="checkout-right">
					<h4>Your shopping cart contains: <span><?php echo count($_SESSION['cart']) . " "; echo count($_SESSION['cart'])==1?"product":"products"; ?></span></h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>
								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if ($_SESSION['cart_details']!=false) {
								# code...
								$err='';
								$i = 0;
								while ($row = mysqli_fetch_array($_SESSION['cart_details'])) {
									$getCopyOfCart[$i]['name']=$row['name'];
									$getCopyOfCart[$i]['price']=$row['price'];
									$getCopyOfCart[$i]['quantity']=$_SESSION['cart'][$row['id']]['quantity'];
									$i++;
							 ?>
							<tr class="rem1">
								<td class="invert-image" ><a href="single.php"><img src="images/<?php echo $row['image']; ?>" alt=" " class="img-responsive"></a></td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											<a href="index.php?action=minus&id=<?php echo$row['id']; ?>"><div class="entry value-minus">&nbsp;</div></a>
											<div class="entry value"><span><?php echo $_SESSION['cart'][$row['id']]['quantity']; ?></span></div>
											<a href="index.php?action=plus&id=<?php echo$row['id']; ?>"><div class="entry value-plus active">&nbsp;</div></a>
										</div>
									</div>
									</div>
								</td>
								<td class="invert"><?php echo $row['name']; ?></td>

								<td class="invert">$<?php echo $row['price']; ?></td>
								<td class="invert">
									<div class="rem">
										<a href="index.php?action=delete&id=<?php echo $row['id']; ?>"><div class="close1" style="right: 15px;"> </div></a>
									</div>

								</td>
							</tr>
							<?php }}else{$err = "Your cart is empty!";}
							 ?>
							

						</tbody>
					</table>
					<?php echo "<span><b>". isset($err)?$err:"" ."</b></span>"; ?>
				</div>
				<div class="checkout-left">
					<div class="col-md-4 checkout-left-basket">
						<a href="index.php?action=home"><h4>Continue to basket</h4></a>
						<ul>

							<?php
								$_SESSION['sum'] = 0;
								if (isset($getCopyOfCart)) {
								 	# code...
								
								foreach ($getCopyOfCart as $k => $v) {
								# code...
							 ?>
								<li><?php echo $v['name']; ?> <i>-</i> <span>$ <?php echo number_format($v['price']*$v['quantity'],2); ?> </span></li>

							<?php $_SESSION['sum']+=$v['price']*$v['quantity'];}} ?>
							<li>&nbsp;</li>
							<li>Total <i>-</i> <span>$ <?php echo number_format($_SESSION['sum'],2); ?></span></li>
						</ul>
					</div>
					<?php if($err==''){ ?>
					<div class="col-md-8 address_form">
						<h4>Add a new Details</h4>
						<form action="index.php?action=payment" method="post" class="creditly-card-form agileinfo_form">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Full name: </label>
											<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Mobile number:</label>
													<input class="form-control" type="text" placeholder="Mobile number" name=phone>
												</div>
											</div>
											<div class="card_number_grid_right">
												<div class="controls">
													<label class="control-label">Address: </label>
													<input class="form-control" type="text" placeholder="Address" name="addr">
												</div>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="controls">
											<label class="control-label">Town/City: </label>
											<input class="form-control" type="text" placeholder="Town/City" name = "city">
										</div>
									</div>
									<button class="submit check_out" type="submit" name="pay">Make a Payment</button>
								</div>
							</section>
						</form>
						<div class="">
							<a href="">&nbsp; </a>
						</div>
					</div>
					<?php } ?>
					<div class="clearfix"> </div>


					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- //top products -->
		<div class="mid_slider_w3lsagile">
			<div class="col-md-3 mid_slider_text">
				<h5>Some More Shoes</h5>
			</div>
			<div class="col-md-9 mid_slider_info">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class=""></li>
						<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="2" class=""></li>
						<li data-target="#myCarousel" data-slide-to="3" class=""></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
						<div class="item active">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g5.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g6.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g1.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g2.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g3.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
								<div class="col-md-3 col-sm-3 col-xs-3 slidering">
									<div class="thumbnail"><img src="images/g4.jpg" alt="Image" style="max-width:100%;"></div>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
					<!-- The Modal -->

				</div>
			</div>

			<div class="clearfix"> </div>
		</div>
		<!-- /newsletter-->
		<div class="newsletter_w3layouts_agile">
			<div class="col-sm-6 newsleft">
				<h3>Sign up for Newsletter !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form action="#" method="post">
					<input type="email" placeholder="Enter your email..." name="email" required="">
					<input type="submit" value="Submit">
				</form>
			</div>

			<div class="clearfix"></div>
		</div>
		<!-- //newsletter-->
		<!-- footer -->
	
	</div>
	<!-- //footer -->
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	
