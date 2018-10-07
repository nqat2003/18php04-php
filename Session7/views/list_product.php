<?php
    include 'connectdtb.php';
    $sql = "SELECT * FROM products";
    ?>
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">LIST USER</h3>
        <div class="box-tools">
            <form action="" method="POST">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                <div class="input-group-btn">
                  <button type="submit" name="search" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
          </div>
      </form>
  </div>
</div>
<!-- /.box-header -->
<div class="box-body table-responsive no-padding">
    <table class="table table-hover">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    <?php 
        if (isset($_POST['search'])) {
            $keyword = $_POST['table_search'];
            if (!empty($keyword)){
                $sql = "SELECT * FROM products WHERE name LIKE '%$keyword%' OR price LIKE '%$keyword%' OR description LIKE '%$keyword%'";
            }
        }
            $result = mysqli_query($con,$sql);
            while ($row = mysqli_fetch_array($result)) {    
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['price']. " VNĐ"; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td>
            <?php echo "<a class='label label-success' href='views/edit_product.php?id={$row['id']}'>EDIT</a>"; ?>
            <?php echo "<a class='label label-danger' href='views/delete_product.php?id={$row['id']}'>DELETE</a>"; ?>
        </td>
    </tr>
    <?php } ?>
</table>
</div>
</div>