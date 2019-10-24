<?php
  include('connect.php');
  session_start();
  if(!isset($_SESSION['level']))
    header('Location: login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Quản lý
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="index.php" class="simple-text text-center logo-normal">
          Trang chủ
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="">
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Trang chủ</p>
            </a>
          </li>
          <?php
          if($_SESSION["level"]==1)
          {
          echo '<li>';
          echo '<a href="./user.php">';
          echo '<i class="nc-icon nc-single-02"></i>';
          echo '<p>Người dùng</p>';
          echo ' </a>';
          echo '</li>';
          }
          else
          {
          echo '<li>';
          echo '<a href="./profile.php">';
          echo '<i class="nc-icon nc-single-02"></i>';
          echo '<p>Thông tin người dùng</p>';
          echo ' </a>';
          echo '</li>';
          }
          ?>
          <li>
            <a href="./new.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Tin tức</p>
            </a>
          </li>
          <li class="active">
            <a href="./category.php">
              <i class="nc-icon nc-paper"></i>
              <p>Danh mục</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Danh mục</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Change Password</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="content">
        <div class="col-md-12">
          <div class="card card-user">
            <div class="card-header">
              <h5 class="card-title">Thêm Danh mục</h5>
            </div>
            <div class="card-body">
            <?php
                if (isset($_POST["submit"])) {
                  $cate = $_POST["cate_name"];
                  mysqli_set_charset($conn,'utf8');
                  $query = "INSERT INTO cate (tendanhmuc) VALUES ('$cate')";
                  mysqli_query($conn, $query);
                }
                ?>
              <form method="post" action="addcate.php">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Tên danh mục</label>
                      <input type="text" name="cate_name" class="form-control" placeholder="Tên danh mục">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="update ml-auto mr-auto">
                    <button type="submit" name="submit" class="btn btn-primary btn-round">Thêm</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
</body>

</html>