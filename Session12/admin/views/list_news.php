<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
    img{
      width: 100px;
      height: 150px;
    }
    table,th{
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">LIST NEWS</h3>
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
          <th>Title</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
        <?php 
        while ($row = mysqli_fetch_array($listproduct)) {    
          ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><img src="../images/<?php echo $row['image']; ?>"></td>
            <td>
              <?php echo "<a class='label label-success' href='index.php?action=update_news&id={$row['id']}'>VIEW DETAILS</a>"; ?>
              <?php echo "<a class='label label-danger' href='index.php?action=delete_news&id={$row['id']}'>DELETE</a>"; ?>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</body>
</html>