<?php 
session_start();
	$p_id=$_GET['p_id'];
	$u_id = $_SESSION['id'];
	$u_name = $_SESSION['name'];
		

	
	include 'database.php';
	
	$sql1=mysqli_query($conn,"SELECT * FROM cart where p_id='".$p_id."'");
    if(mysqli_num_rows($sql1)>0)
    {
    	if(mysqli_fetch_array($sql1))
    	{
	        echo "<script language='javascript'>alert('Item Already Exists')</script>"; 
	        //exit;
	        header("location:profile.php");
    	}
    }
    else{
		$query = "INSERT INTO cart(user_id,p_id) VALUES('".$u_id."','".$p_id."')";
		//echo $query;
		$sql = mysqli_query($conn,$query);
		if ($sql) 
		{
			echo "<script>alert('Add to cart successfully...')</script>";
			header("location:profile.php");
		}
		else
		{
			echo "<script>alert('Try again...')</script>";
			
		}
	}
?>