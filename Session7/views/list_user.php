<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
    img{
      width: 100px;
      height: 100px;
    }
    table,th{
      text-align: center;
    }
  </style>
</head>
<body>
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
          <th>Name</th>
          <th>Username</th>
          <th>Avatar</th>
          <th>Action</th>
        </tr>
        <?php 
        while ($row = mysqli_fetch_array($listUser)) {    
          ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><img src="imguploads/user/<?php echo $row['avatar']; ?>"></td>
            <td>
              <?php echo "<a class='label label-success' href='index.php?type=user&action=update_user&id={$row['id']}'>EDIT</a>"; ?>
              <?php echo "<a class='label label-danger' href='index.php?type=user&action=delete_user&id={$row['id']}'>DELETE</a>"; ?>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</body>
</html>
