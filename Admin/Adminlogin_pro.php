<?php 
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];

	//echo $email."<br>";
	//echo $password;

	if((($email=="pjadav669@rku.ac.in")&&($password=="123"))||(($email=="kbhut865@rku.ac.in")&&($password=="456")))
	{
		$_SESSION['email'] = $email;
		echo "<script>alert('Login successfully......')</script>";
		header("Location: AdminDeshboard.php"); 
	}
	else
	{
		echo "<script>alert('Something went Wrong......')</script>";

		header("location: admin.php");
	}
?>