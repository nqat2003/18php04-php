<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color:#337AB7; color:white;" >
			<h2 style="margin-top:0px; margin-bottom:0px;"> Tin Tức</h2>
		</div>
		
		<div class="panel-body">
			<!-- item -->
			<?php while ($row = mysqli_fetch_array($list)) {
			# code...
		 	?>
			<div class="row-item row">
				<h3>
					<a href="#">Thể loại nha</a>
				</h3>
				<div class="col-md-12 border-right">
					<div class="col-md-3">
						<a href="index.php?action=details&id=<?php $row['id'] ?>">
							<img class="img-responsive" src="images/<?php echo $row['image']; ?>" alt="">
						</a>
					</div>

					<div class="col-md-9">
						<h3><?php echo $row['title']; ?></h3>
						<p><?php echo $row['description']; ?></p>
						<a class="btn btn-primary" href="index.php?action=details&id=<?php echo $row['id'] ?>">View More... <span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>

				</div>

				<div class="break"></div>
			
			</div>
		<?php } ?>
	</div>
</div>
</div>