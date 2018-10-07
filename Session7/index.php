<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MVC - Boostrap</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/jquery-jvectormap.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <?php include 'controller/controller.php'; ?>
  <div class="wrapper">
    <header class="main-header">
      <?php include 'common/header.php'; ?>
    </header>
    <aside class="main-sidebar">
      <?php include 'common/sidebar.php'; ?>
    </aside>
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Dashboard
          <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      <section class="main-content">
        <?php 
          $controller = new Controller();
          $controller->handleRequest();
        ?>
      </section>
    </div>
    <footer class="main-footer">
      <?php include 'common/footer.php'; ?>
    </footer>
  </div>
  <!-- ./wrapper -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/fastclick.js"></script>
  <script src="js/adminlte.min.js"></script>
  <script src="js/jquery.sparkline.min.js"></script>
  <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="js/jquery.slimscroll.min.js"></script>
  <script src="js/Chart.js"></script>
  <script src="js/dashboard2.js"></script>
  <script src="js/demo.js"></script>
</body>
</html>
