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
    <title>FEEDBACK || PKD</title>  
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
						
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						
						<li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>
						

						<li class="nav-item "><a class="nav-link" href="about.php">About</a></li>
						
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

                        <li class="nav-item active"><a class="nav-link" href="feedback.php">Feedback</a></li>
						<div class="dropdown">
						<li class="nav-item "><a class="nav-link" href="profile.php"><i class="fa fa-user" style="font-size:29px"></i></a></li>
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
					<h1>FEEDBACK</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->
	<br>

	<div class="heading-title text-center">
		<h2> Give's Your Review</h2>
	</div>

	<section id="doctors" class="doctors section-bg">
            <div class="container" data-aos="fade-up" style="box-shadow:
                 inset 0 -3em 3em rgba(0,0,0,0.1),
                 0 0  0 2px rgb(255,255,255),
                 0.3em 0.3em 1em rgba(0,0,0,0.3);">
                <center>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form action="#" method="post" name="sentMessage" id="feedbackform" novalidate="novalidate">

                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="control-group">
                                    <input type="text" class="form-control" id="complain" name="complain" placeholder="Eny Complain For Waiter" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <br>

                                <div class="control-group">
                                    <div style="display:inline-block;margin-right:150px">
                                        <h3>SERVICE</h3>
                                        <div class="wrapper">
                                            <input name="ratingRadio" type="radio" id="st1" value="1" />
                                            <label for="st1"></label>
                                            <input name="ratingRadio" type="radio" id="st2" value="2" />
                                            <label for="st2"></label>
                                            <input name="ratingRadio" type="radio" id="st3" value="3" />
                                            <label for="st3"></label>
                                            <input name="ratingRadio" type="radio" id="st4" value="4" />
                                            <label for="st4"></label>
                                            <input name="ratingRadio" type="radio" id="st5" value="5" />
                                            <label for="st5"></label>
                                        </div>
                                    </div>
                                    <div style="display:inline-block;">									
                                        <h3>CLEANNESS</h3>
                                        <div class="wrapper">
                                            <input name="ratingRadio1" type="radio" id="st11" value="1" />
                                            <label for="st11"></label>
                                            <input name="ratingRadio1" type="radio" id="st12" value="2" />
                                            <label for="st12"></label>
                                            <input name="ratingRadio1" type="radio" id="st13" value="3" />
                                            <label for="st13"></label>
                                            <input name="ratingRadio1" type="radio" id="st14" value="4" />
                                            <label for="st14"></label>
                                            <input name="ratingRadio1" type="radio" id="st15" value="5" />
                                            <label for="st15"></label>
                                        </div>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="Give Eny Suggestion" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div>
                                    <button class="btn2" type="submit" name="save">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </center>
            </div>
        </section>

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
		  $query = "INSERT INTO feedback(name,email,complain,message) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['complain']."','".$_POST['message']."')";
          $sql = mysqli_query($conn,$query);
		  if($sql)
		  {
			  echo"<script>alert('Your Feedback Is Send...........!!!')</script>";
		  }
		  else
		  {
			echo"<script>alert('Please Try Again...........!!!')</script>";
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