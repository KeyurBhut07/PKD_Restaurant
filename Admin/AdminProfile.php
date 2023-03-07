<?php 
    session_start();
   if($_SESSION['email']!= "")
    {
    
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <title>Admin | Profile</title>
</head>
<body>
    <?php 
        include 'AdminHeader.php';
    ?>
    <div class="heading-title text-center">
		<h2>Profile</h2>
	</div>
    <?php 
        include 'AdminFooter.php';
    ?>
</body>
</html>
<?php 
    }
    else
    {
        header("location:admin.php");
    }
?> 