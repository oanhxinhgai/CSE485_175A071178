<?php
include('connect.php');
session_start();
if (!isset($_SESSION['level']))
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
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
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
                    if ($_SESSION["level"] == 1) {
                        echo '<li>';
                        echo '<a href="./user.php">';
                        echo '<i class="nc-icon nc-single-02"></i>';
                        echo '<p>Người dùng</p>';
                        echo ' </a>';
                        echo '</li>';
                    } else {
                        echo '<li>';
                        echo '<a href="./profile.php">';
                        echo '<i class="nc-icon nc-single-02"></i>';
                        echo '<p>Thông tin người dùng</p>';
                        echo ' </a>';
                        echo '</li>';
                    }
                    ?>
                    <li class="active">
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
                <?php

                if (isset($_POST["submit"])) {
                    $title = $_POST["title"];
                    $danhmucid = $_POST["danhmucid"];
                    $userid = $_POST["userid"];
                    $tomtat = $_POST["tomtat"];
                    $noidung = $_POST["noidung"];
                    $img = $_FILES["img"]["name"];
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $date = date('Y-m-d H:i:s');
                    $postId = $_GET['id'];
                    $target_dir = "uploads/img/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);

                    if (!empty($_FILES['img']['name'])) {
                        $query = "UPDATE news 
                                SET userid='$userid',danhmucid='$danhmucid',tieude='$title',tomtat='$tomtat',noidung='$noidung',ngaydang='$date',image_jpg='$img'
                                WHERE newid='$postId'";
                        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                            mysqli_set_charset($conn, "UTF8");
                            mysqli_query($conn, $query);
                        }
                    } else {
                        $query = "UPDATE news 
                                 SET userid='$userid',danhmucid='$danhmucid',tieude='$title',tomtat='$tomtat',noidung='$noidung',ngaydang='$date'
                                WHERE newid='$postId'";
                        mysqli_set_charset($conn, "UTF8");
                        mysqli_query($conn, $query);
                    }
                }
                ?>
                <div class="col-md-12">
                    <div class="card card-user">
                        <div class="card-header">
                            <h5 class="card-title">Thêm Tin tức</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <?php
                                            $postId = $_GET['id'];
                                            $sql = "SELECT * FROM news,users,cate WHERE newid = $postId and news.userid=users.userid and news.danhmucid=cate.danhmucid";
                                            mysqli_set_charset($conn, "UTF8");
                                            $result = mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_assoc($result);
                                            ?>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Người viết</label>
                                                    <select name="userid" class="form-control">
                                                            <option selected value="<?php echo $row["userid"] ?>"><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Danh mục</label>
                                                    <select name="danhmucid" class="form-control">
                                                            <option selected value="<?php echo $row["danhmucid"] ?>"><?php echo $row["tendanhmuc"] ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>
                                                        Title
                                                    </label>
                                                    <input type="text" name="title" class="form-control" value="<?php echo $row['tieude']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Tóm tắt</label>
                                                    <textarea class="form-control" rows="3" name="tomtat"><?php echo $row['tomtat']; ?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Nội dung</label>
                                                    <textarea name="noidung"><?php echo $row['noidung']; ?></textarea>
                                                    <script>
                                                        CKEDITOR.replace('noidung');
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="update ml-auto mr-auto">
                                                <button type="submit" name="submit" class="btn btn-primary btn-round">Thêm</button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input id="img" type="file" name="img" onchange="changeImg(this)" class="form-control hidden">
                                            <img id="avatar" class="thumbnail" width="100%" height="100%" src="uploads/img/<?php echo $row['image_jpg'] ?>">
                                        </div>
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
    <script>
        function changeImg(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function() {
                $('#img').click();
            });
        });
    </script>
</body>

</html>