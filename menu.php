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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootsrtap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>

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
						
						<li class="nav-item active"><a class="nav-link" href="menu.php">Menu</a></li>
						
						<li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>
						

						<li class="nav-item "><a class="nav-link" href="about.php">About</a></li>
						
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

            <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>

            <div class="dropdown">
						<li class="nav-item "><a class="nav-link" href="profile.php"><i class="fa fa-user" style="font-size:24px"></i></a></li>
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
					<h1>SPECIAL MENU</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->

<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="container">

      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <a href="menu/pizza.php">
            <div class="menu-section">
              <h2 class="menu-section-title">PIZZA</h2>
              <center>
                <div class="menu-item">
                  <img src="./images/pizza.jpg" class="menu-item-product" style="height:400px ; width:400p" >
                </div>
              </center>
            </div>  
          </a> 
        </div>
        <div class="col-xs-12 col-sm-6">
          <a href="menu/fastfood.php">
            <div class="menu-section">
                <h2 class="menu-section-title">FastFood</h2>
                <center >
                  <div class="menu-item">
                    <img src="./images/fastfood.jpeg" class="menu-item-product" style="height:400px ; width:400p">
                  </div>
                </center>  
            </div>
          </a>
        </div>
      </div>  
    

      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <a href="menu/burgger.php">
            <div class="menu-section">
              <h2 class="menu-section-title">BURGGER</h2>
              <center>
                <div class="menu-item">
                  <img src="./images/burgger.jpg" class="menu-item-product" style="height:400px ; width:400p">
                </div>
              </center>   
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6">
          <a href="menu/dishes.php">
            <div class="menu-section">
              <h2 class="menu-section-title">All Dishes</h2> 
              <center>
                <div class="menu-item">
                  <img src="./images/1.jpg" class="menu-item-product" class="mnuimg" style="height:400px ; width:400p">
                </div>
              </center>              
            </div>
          </a>  
        </div>
     </div>

     <div class="row">
        <div class="col-xs-12 col-sm-6">
          <a href="menu/juice.php">
            <div class="menu-section">
              <h2 class="menu-section-title">JUICE</h2>
              <center>
                <div class="menu-item">
                  <img src="./images/juice.jpg" class="menu-item-product" style="height:400px ; width:400p">
                </div>
              </center>   
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6">
          <a href="menu/colddrinks.php">
            <div class="menu-section">
              <h2 class="menu-section-title">Colddrinks</h2> 
              <center>
                <div class="menu-item">
                  <img src="./images/calldrinks.jpg" class="menu-item-product" class="mnuimg" style="height:400px ; width:400p">
                </div>
              </center>              
            </div>
          </a>  
        </div>
     </div>
     
     
  </div>
</div>

	
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
  }
  else
  {
    header("Location:index.php");
  }
?>