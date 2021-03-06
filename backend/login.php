
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/theme.css"/>
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> 已經有了?-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"> -->
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpeg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					<!-- Account Login -->
					Happy Cake 後台登入
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="login_check.php">
					<!-- Enter username -->
					<div class="wrap-input100 validate-input" data-validate = "請輸入帳號">
						<input class="input100" type="text" name="account" placeholder="請輸入帳號">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<!-- Enter password -->
					<div class="wrap-input100 validate-input" data-validate="請輸入密碼">
						<input class="input100" type="password" name="password" placeholder="請輸入密碼">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					
					<?php if(isset($_GET['MSG']) && $_GET['MSG'] == "error"){ ?>
						<div class="alert alert-danger" role="alert">
							<strong>登入錯誤，請確認你的帳號密碼是否正確</strong>
						</div>
						<!--上下兩個都可以用-->
						<!-- <div class="alert alert-warning" role="alert">
							<strong> 登入錯誤，請確認你的帳號密碼是否正確 </strong>
						</div> -->
					<?php }else if(isset($_GET['MSG']) && $_GET['MSG'] == "logout"){ ?>
						<div class="alert alert-success" role="alert">
							<strong>登出成功!</strong>
						</div>
					<?php }else if(isset($_GET['MSG']) && $_GET['MSG'] == "please_login"){ ?>
						<div class="alert alert-warning" role="alert">
							<strong>請登入帳號密碼方可使用功能</strong>
						</div>
					<?php } ?>
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							<!-- Login -->
							登入
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>