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
	
	

	<section>  
        <div class="container">
            <br>
            <div class="heading-title text-center">
                <h2>BOOKING TABLE</h2>
            </div>
            <form  method="POST">
                <div class="row">
                    
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-box">
                            <input type="text" name="name" id="form_name" placeholder="Name" required="required" data-error="Firstname is required.">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-box">
                            <input type="email" name="email" id="email" placeholder="E-Mail ID" required="required" data-error="E-mail id is required.">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-box">
                            <input type="text" name="mobile" id="phone" placeholder="contact no." required="required" data-error="Phone number is required.">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-box">
                            <input type="number" name="person" id="no_of_persons" placeholder="No. Of persons" required="required" data-error="Number of Person required." />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-box">
                            <!--<input type="date" name="date-picker" id="date-picker" placeholder="Date" required="required" data-error="Date is required." />-->
                            <input type="Date" name="date" placeholder="Date" required="required">
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-box">
                            <input type="Time" name="time" required>
                            <!--<select name="time" class="selectpicker">
                                <option selected>Time</option>
                                <option value="8:00 To 12:15 AM">8:00 To 12:15 AM</option>
                                <option value="1:00 To 2:45 PM">1:00 To 2:45 PM</option>
                                <option value="5:00 To 7:00 PM">5:00 To 7:00 PM</option>
                                <option value="8:00 To 12:00 PM">8:00 To 12:00 PM</option>
                            </select>-->
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-box">
                            <select name="food" id="preferred_food" class="selectpicker">
                                <option selected disabled>preferred food</option>
                                <option value="Pizza">Pizza</option>
                                <option value="FastFood">FastFood</option>
                                <option value="Burgger">Burgger</option>
                                <option value="Dishes">All Dishes</option>
                                <option value="Juice">Juice</option>
                                <option value="Colddrinks">Colddrinks</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-box">
                            <select name="occasion" id="occasion" class="selectpicker">
                                <option selected disabled>Occasion</option>
                                <option value="Wedding">Wedding</option>
                                <option value="Birthday">Birthday</option>
                                <option value="Anniversary">Anniversary</option>
                                <option value="Dating">Dating</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                        
                </div>
                <center>
                    <input class="btn2 text-center" type="submit" value="Login" name="book" />
                </center>  
            </form>
        </div>

        <br>
</section>



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
    if(isset($_POST['book']))
    {
        $query = "INSERT INTO reservation(name,email,mobile,person,date,time,food,occasion) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['mobile']."','".$_POST['person']."','".$_POST['date']."','".$_post['time']."','".$_Post['food']."','".$_POST['occasion']."')";
        $sql = mysqli_query($conn,$query);
        if($sql)
        {
            echo "<script>alert('Your Table is Booked')</script>";
        }
        else
        {
            echo "<script>alert('Something went Wrong...!!')</script>";
        }
    }

?>