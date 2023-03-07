<?php 
    session_start();
    if($_SESSION['email']!= "")
    {
        include_once '../database.php';
   
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <title>Admin | Deshboard</title>
</head>
<body>
    <!-- Start Header -->
    <?php 
        include 'AdminHeader.php';
    ?>
    <div class="heading-title text-center">
		<h2>Wellcome Admin</h2>
	</div>
    <!-- End Header -->
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <div class="cards">
                        <!-- A card with given width -->
                        <a href="AdminUserList.php">
                            <div class="cards__item">
                                <h1>User</h1>
                                <?php 
                                    $count = 0;
                                    $sql1 = mysqli_query($conn,"SELECT * FROM user");
                                    if (mysqli_num_rows($sql1)>0) {
                                        while ($row = mysqli_fetch_array($sql1)) {
                                            $count++;
                                        }
                                ?>
                                <h1><?php echo $count; ?></h1>
                                <?php          
                                        
                                    }
                                ?>
                            </div>
                        </a>
                        <a href="AdminMenuList.php">
                            <div class="cards__item">

                                <h1>Total Product</h1>
                                <?php 
                                    $count = 0;
                                    $sql1 = mysqli_query($conn,"SELECT * FROM product");
                                    if (mysqli_num_rows($sql1)>0) {
                                        while ($row = mysqli_fetch_array($sql1)) {
                                            $count++;
                                        }
                                ?>
                                <h1><?php echo $count; ?></h1>
                                <?php          
                                        
                                    }
                                ?>
                                
                            </div>
                        </a>
                        <a href="AdminOrderList.php">
                            <div class="cards__item">
                                <h1>Total Order</h1>
                                <?php 
                                    $count = 0;
                                    $sql1 = mysqli_query($conn,"SELECT * FROM rorder");
                                    if (mysqli_num_rows($sql1)>0) {
                                        while ($row = mysqli_fetch_array($sql1)) {
                                            $count++;
                                        }
                                ?>
                                <h1><?php echo $count; ?></h1>
                                <?php          
                                        
                                    }
                                ?>
                            </div>
                        </a>
                        <a href="AdminReservationList.php">
                            <div class="cards__item">
                                <h1>Total Reservation</h1>
                                <?php 
                                    $count = 0;
                                    $sql1 = mysqli_query($conn,"SELECT * FROM reservation");
                                    if (mysqli_num_rows($sql1)>0) {
                                        while ($row = mysqli_fetch_array($sql1)) {
                                            $count++;
                                        }
                                ?>
                                <h1><?php echo $count; ?></h1>
                                <?php          
                                        
                                    }
                                ?>
                            </div>
                        </a>
                        <a href="AdminFeedback.php">
                            <div class="cards__item">
                                <h1>Users Feedback</h1>
                               <?php 
                                    $count = 0;
                                    $sql1 = mysqli_query($conn,"SELECT * FROM feedback");
                                    if (mysqli_num_rows($sql1)>0) {
                                        while ($row = mysqli_fetch_array($sql1)) {
                                            $count++;
                                        }
                                ?>
                                <h1><?php echo $count; ?></h1>
                                <?php          
                                        
                                    }
                                ?>
                            </div>
                        </a>
                        <!-- Repeat other cards -->
                        
                    </div>
                </center>
            </div>
        </div>
    </div>
    <!-- Start Footer -->
    <?php 
        include 'AdminFooter.php';
    ?>
    <!-- End Header -->
</body>
</html>
<?php 
    }
    else
    {
        header("location: admin.php");
    }
?>