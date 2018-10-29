<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="imguploads/user/<?php echo isset($_SESSION['avatar'])?$_SESSION['avatar']:'default.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo isset($_SESSION['name'])?$_SESSION['name']:'No login';?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-user"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?action=add_user"><i class="fa fa-user-plus"></i> Add User</a></li>
            <li><a href="index.php?action=list_user"><i class="fa fa-th-list"></i> List Users</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-archive"></i> <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?action=add_product"><i class="fa fa-plus"></i> Add Product</a></li>
            <li><a href="index.php?action=add_type"><i class="fa fa-plus"></i> Add Categologies</a></li>
            <li><a href="index.php?action=list_product"><i class="fa fa-th-list"></i> List Products</a></li>
          </ul>
        </li>
        <!-- <li class="treeview">
          <a href="index.php?action=change_name">
            <i class="fa fa-laptop"></i>
            <span>Change Shop Name</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li> -->

      </ul>
    </section>