<?php
session_start();
if ($_SESSION['email'] != "") 
 {
	include 'database.php';
	error_reporting(0);
	
	$email= $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="p-3 mb-2 bg-secondary text-white">
	<form method="post" action="" enctype="multipart/form-data">
		<input type="file" name="uploadfile">
		<input type="submit" name="Upload" value="submit">
	</form>
</body>
</html>

<?php
	if($_POST['Upload'])
	{
		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "person/".$filename;
		move_uploaded_file($tempname,$folder);
		if($filename!="")
		{
			//$query = "INSERT INTO user(photo) VALUES('$folder') WHERE email = '".$email."' ";
			$query = "UPDATE user SET photo='$folder' WHERE email='$email' ";
			$data = mysqli_query($conn,$query);
			if($data)
			{
				echo "<script language='javascript'>alert('Display Photo inserted successfully')</script>";
			}
		}
		else
		{
			echo "<script language='javascript'>alert('Something went rong')</script>";
		}
	}
}
else
{
	header('location:index.php');
}
?>