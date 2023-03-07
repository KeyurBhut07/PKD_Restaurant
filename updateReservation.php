<?php 
    session_start();
    include 'database.php';
    if($_SESSION['email']!= "")
    {
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
<style>
      .dropdown {
        position: relative;
        display: inline-block;
      }
      
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      
      .dropdown-content a {
        color: black;
        font-size:20px;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      
      .dropdown-content a:hover {background-color: #d65106;color: white; font-weight: normal;}
      
      .dropdown:hover .dropdown-content {display: block;}
      
      .dropdown:hover .dropbtn {background-color: #3e8e41;}
      
</style>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Restaurant</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/PKD.png" alt="" height="97px" style="border-radius: 50%" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
						
						<li class="nav-item "><a class="nav-link" href="menu.php">Menu</a></li>
						
						<li class="nav-item active"><a class="nav-link" href="reservation.php">Reservation</a></li>
						

						<li class="nav-item "><a class="nav-link" href="about.php">About</a></li>
						
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

						<li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>

						
                        <div class="dropdown">
						<li class="nav-item"><a class="nav-link" href="profile.php"><i class="fa fa-user" style="font-size:24px"></i></a></li>
						<div class="dropdown-content">
							<a href="editProfile.php">Edit Profile</a>
							<a href="logout.php">Logout</a>
						</div>
						</div>

					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
	
	<!-- Start header -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>RESERVATION</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->
	
	
<br>
    <div  class="container" style="box-shadow:
                 inset 0 -3em 3em rgba(0,0,0,0.1),
                 0 0  0 2px rgb(255,255,255),
                 0.3em 0.3em 1em rgba(0,0,0,0.3);">
            <div class="heading-title text-center">
                <h2>BOOKING TABLE</h2>
            </div>
                <center>
                    <div class="col-lg-8">
                        <?php
                            $rid = $_GET['rid'];
                            include 'database.php';
                            $query="SELECT * FROM reservation where SrNo='".$rid."'  ";
                            $res=mysqli_query($conn,$query);

                            if(mysqli_num_rows($res))
                            {
                                while($row=mysqli_fetch_array($res))
                                {

                        ?>

                        <form name="reservation" id="reservationform" novalidate="novalidate" action="#" method="post">

                            <div class="control-group" style="margin-top:50px;">
                                <input type="text" class="form-control" id="name" name="name" placeholder=" Name" required="required" data-validation-required-message="Please enter your name" value="<?php echo $row['name'];?>"     />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="control-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder=" Email" required="required" data-validation-required-message="Please enter your email" value="<?php echo $row['email'];?>" />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="control-group">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required="required" data-validation-required-message="Please enter your email" value="<?php echo $row['mobile'];?>"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" id="person" name="person" placeholder="How Many Person" required="required" data-validation-required-message="Please enter your email"
                                        value="<?php echo $row['person'];?>" />
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <input type="date" class="form-control" id="date" name="date" placeholder="Date" required="required" data-validation-required-message="Please enter your name" value="<?php echo $row['date'];?>"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="time" class="form-control" name="time" placeholder="Time" required="required" 
                                        value="<?php echo $row['time'];?>" />
                                    </div>
                                </div>
							</div>

                            <div class="control-group">

                            </div>

                            <div class="control-group">
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                       <select class="form-control" name="food" required>
                                            <option>Food</option>
                                            <?php 
                                                $q= "SELECT * FROM p_type";
                                                $result=$conn->query($q);
                                                if(mysqli_num_rows($result)>0)
                                                {
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                            ?>
                                            <option value="<?php echo $row['Name'];?>"><?php echo $row["Name"]; ?></option>
                                            <?php 
                                                    }
                                                }
                                            ?>
                                        </select>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="occasion">
                                            <option >Occasion</option>
                                            <option >Birthday Party</option>
                                            <option >Anniversary</option>
                                            <option >Day Salebration</option>
                                            <option >Datting</option>
                                            <option >Wadding</option>
                                            <option >Other</option>
                                        </select>
                                        <p class="help-block text-danger"></p>

                                    </div>
                                </div>
                            </div>

                            <div>
                                <center><button class="btn2" type="submit" name="save">Book Table</button></center>
                            </div>
                        </form>
                        <?php
                         }
                            }
                        ?>
                    </div>
    </center>
</div>
<br>

	<!-- Start Footer -->
	<?php

	include 'footer.php';

	?>
	<!-- End Footer -->
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>

<?php 
    include 'database.php';
    if(isset($_POST['save']))
    {
        $query = "UPDATE reservation SET name='".$_POST['name']."',email='".$_POST['email']."',mobile='".$_POST['mobile']."',person='".$_POST['person']."',date='".$_POST['date']."',time='".$_POST['time']."',food='".$_POST['food']."',occasion='".$_POST['occasion']."' where SrNo='".$rid."'  ";
        $sql = mysqli_query($conn,$query);
        //echo $query;
        if($sql)
        {
            echo "<script>alert('Your Table is Updated')</script>";
            $res=1;
           
        }
        else
        {
            echo "<script>alert('Something went Wrong...!!')</script>";
            $res=0;
        }

    }

?>
<?php 
  }
  else
  {
    header("Location:index.php");
  }
?>