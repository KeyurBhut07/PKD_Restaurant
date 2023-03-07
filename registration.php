<?php
    include_once 'database.php';
	error_reporting(0);
	if($_POST['pass']==$_POST['cpass'])
	{
		if($_POST['registration'])
		{
			$query="INSERT INTO user(name,email,mobile,pass) VALUES('".$_POST['name']."', '".$_POST['email']."','".$_POST['mobile']."','".$_POST['pass']."')";
			$sql=mysqli_query($conn,$query);
			if($sql)
			{
				echo "<script>alert('Something Went Wrong...')</script>"; 
				header("location:index.php");
			}
			else
			{
				echo "<script>alert('Something Went Wrong...')</script>"; 
				header("location:registration.php");
			}
		}
	}
	else
	{
		echo "<script>alert('Enter same password...!!')</script>"; 
	}
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Sign up | PKD </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================	
	<link rel="icon" type="image/png" href="./login/images/icons/favicon.ico"/>-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./login/css/util1.css">
	<link rel="stylesheet" type="text/css" href="./login/css/main1.css">
<!--===============================================================================================-->
</head>
<body>
	
<div class="limiter" >
		<div class="container-login100">
			<div class="wrap-login100 p-t-25 ">
				<form class="login100-form validate-form"  method="POST">
					<span class="login100-form-title p-b-37">
					Sign Up
					</span>
					<span class="login100-form-avatar">
						<img src="./images/PKD.png">
						<!--<img src="./login/images/avatar-01.jpg" alt="AVATAR">-->
					</span>

					<div class="wrap-input100 validate-input m-t-50 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>
                                    
                                        <div class="wrap-input100 validate-input m-t-50 m-b-35" data-validate = "Enter Email">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
                                    
                    <div class="wrap-input100 validate-input m-t-50 m-b-35" data-validate = "Enter Mobile Number">
						<input class="input100" type="text" name="mobile">
						<span class="focus-input100" data-placeholder="Mobile Number"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
                                    
                    <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="cpass">
						<span class="focus-input100" data-placeholder="Conform Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Registration" name="registration" />
						
					</div>

					<ul class="login-more p-t-50">
						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>

						<li>
							<span class="txt1">
								Do You have an account?
							</span>

							<a href="index.php" class="txt2">
								Sign In
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="./login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./login/vendor/bootstrap/js/popper.js"></script>
	<script src="./login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./login/vendor/daterangepicker/moment.min.js"></script>
	<script src="./login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./login/js/main.js"></script>

</body>
</html>

