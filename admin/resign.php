<?php
include('connect.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Đăng ký
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
	<link href="assets/css/util.css" rel="stylesheet" />
	<link href="assets/css/login.css" rel="stylesheet" />
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="resign.php">
					<span class="login100-form-title">
						Đăng ký
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Nhập Email">
						<input class="input100" type="email" name="email" placeholder="Nhập Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Nhập Password">
						<input class="input100" type="password" name="pass1" placeholder="Nhập Password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Nhập lại Password">
						<input class="input100" type="password" name="pass2" placeholder="Nhập lại Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
					</div>

					<div class="container-login100-form-btn m-b-16">
						<button name="submit" class="login100-form-btn">
							Đăng ký
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$date = date('Y-m-d H:i:s');

		if ($pass1 === $pass2) {
			$pass = password_hash($pass1, PASSWORD_DEFAULT);
			$sql = "insert into users(first_name,last_name,email,password,phone,address,registration_date,avatar,user_level) 
								values ('','','$email','$pass','','','$date','','')";
			mysqli_query($conn, $sql);
			header('Location: login.php');
		} else {
			echo '<strong>Nhập sai pass</strong>';
		}
	}
	?>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/plugins/bootstrap-notify.js"></script>
	<script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
	<script src="assets/js/login.js"></script>
</body>

</html>