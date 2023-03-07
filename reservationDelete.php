<?php 
	include 'database.php';
	$rid = $_GET['rid'];
	$sql = mysqli_query($conn, "DELETE FROM reservation WHERE SrNo = '".$rid."'");
	if($sql)
	{
		echo "<script>alert('Your Table is Removed')</script>";
		header("location:profile.php");
	}
	else
	{
		echo "<script>alert('Something went Wrong...!!')</script>";
	}
?>