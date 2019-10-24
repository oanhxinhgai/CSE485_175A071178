<?php
include('connect.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Login
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
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="login.php">
					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="resign.php" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
				<?php 
            if(isset($_POST['submit']))    
            {
                $email=$_POST['email'];
                $pass=$_POST['pass'];

                $sql = "select * from users where email='$email'";
                $result = mysqli_query($conn,$sql);
                if (mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_assoc($result);
					if (password_verify($pass, $row['password'])) {
					  $_SESSION["level"] = $row['user_level'];
					  header('Location: index.php');
					} 
				  }
                else
                {
                    echo 'error';
                }
            }     
        ?>
			</div>
		</div>
	</div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
	<script src="assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
	<script src="assets/js/login.js"></script>
</body>

</html>

