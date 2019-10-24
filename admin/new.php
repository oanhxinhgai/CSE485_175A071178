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
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
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
          <li>
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
          <li  class="active ">
            <a href="./new.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Tin tức</p>
            </a>
          </li>
          <li>
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
            <a class="navbar-brand" href="#pablo">Tin tức</a>
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
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <a class="btn btn-primary" href="addnew.php">
                Thêm tin tức
              </a>
            </div>
          </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Tin tức</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Ảnh
                      </th>
                      <th>
                        Tiêu đề
                      </th>
                      <th>
                        Người đăng
                      </th>
                      <th>
                        Danh mục
                      </th>
                      <th>
                        Ngày đăng
                      </th>
                      <th>
                        Lựa chọn
                      </th>
                    </thead>
                    <tbody>
                      <?php 
                        $sql = "select * from news,users,cate where news.userid=users.userid and news.danhmucid=cate.danhmucid";
                        mysqli_set_charset($conn, "UTF8");
                        $result = mysqli_query($conn,$sql);
                        $i =1;
                        while ($row = mysqli_fetch_assoc($result))
                        {
                      ?>
                      <tr>
                        <td>
                          <?php echo $i; ?>
                        </td>
                        <td>
                          <img src="uploads/img/<?php echo $row['image_jpg']; ?>" alt="" width="100px" height="100px" class="img-rounded">
                        </td>
                        <td>
                          <?php echo $row['tieude']; ?>
                        </td>
                        <td>
                          <?php echo $row['first_name'].' '.$row['last_name']; ?>
                        </td>
                        <td>
                          <?php echo $row['tendanhmuc']; ?>
                        </td>
                        <td>
                          <?php echo $row['ngaydang']; ?>
                        </td>
                        <td>
                          <div class="">
                            <a href="updatenew.php?id=<?php echo $row['newid']; ?>" class="btn btn-warning modal-trigger">
                              <i class="fa fa-pencil"></i>
                              Chi tiết
                            </a>
                            <a href="editnew.php?id=<?php echo $row['newid']; ?>" class="btn btn-danger" class="btn btn-danger">
                              <i class="fa fa-trash"></i>
                              Xóa
                            </a>
                          </div>
                        </td>
                      </tr>
                      <?php $i++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
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
