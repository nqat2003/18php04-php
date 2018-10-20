<?php while ($row = mysqli_fetch_array($listProduct)) {
  # code...
?>
<div class="col-xs-12 col-md-6">
  <!-- First product box start here-->
  <div class="prod-info-main prod-wrap clearfix">
    <div class="row">
        <div class="col-md-5 col-sm-12 col-xs-12">
          <div class="product-image"> 
            <img src="imguploads/product/<?php echo $row['image'];?>" class="img-responsive"> 
            <span class="tag2 hot">
              HOT
            </span> 
          </div>
        </div>
        <div class="col-md-7 col-sm-12 col-xs-12">
        <div class="product-deatil">
            <h5 class="name">
              <a href="#">
                <?php echo $row['name']; ?>
              </a>
              <a href="#">
                <span>Apple</span>
              </a>                            

            </h5>
            <p class="price-container">
              <span><?php echo $row['price']." VNĐ"; ?></span>
            </p>
            <span class="tag1"></span> 
        </div>
        <div class="description">
          <p><?php echo $row['description']; ?></p>
        </div>
        <div class="product-info smart-form">
          <div class="row">
            <div class="col-md-12"> 
              <a href="javascript:void(0);" class="btn btn-danger">Add to cart</a>
                            <a href="javascript:void(0);" class="btn btn-info">More info</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end product -->
</div>
<?php }; ?>
