<?php 
	include_once 'database.php';
	$p_id = $_GET['p_id'];
	$sql = mysqli_query($conn,"DELETE FROM cart where p_id='".$p_id."'");
	if($sql)
	{
		header("location:profile.php");
	}
	else
	{
		header("location:profile.php");
	}
?>