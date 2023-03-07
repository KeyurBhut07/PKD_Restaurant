<?php 
	session_start();
	include 'database.php';
	if($_SESSION['email']!= "")
	{
?><!DOCTYPE html>
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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
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
						
						<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
						
						<li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>
						

						<li class="nav-item active"><a class="nav-link" href="about.php">About</a></li>
						
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
					<h1>ABOUT US</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->
	<section>
		<div class="container"  >
			<br>
			<div class="heading-title text-center">
				<h2>OUR ORGANIZATION</h2>
			</div>
			
				<p>
					PKD Restaurents is one of the world’s largest quick service restaurant 
					companies with approximately $32 billion in annual system-wide sales and 27,000 restaurants in more 
					than 100 countries and U.S. territories. PKD owns three of the world’s most prominent and iconic quick 
					service restaurant brands – TIM HORTONS®, BURGER KING®, and POPEYES®. These independently operated brands 
					have been serving their respective guests, franchisees and communities for over 45 years.<br>
				</p>
				<p>
					<b><h3>Our Values</h3></b>
					Core to our vision of building the most loved restaurant brands in the world are the values that guide our work, 
					our actions and our interactions each and every day as a company. At PKD, we believe:
					<ul>
						<li><b>Dream Big: </b> is too short for small dreams</li>
						<li><b>Ownership:</b> You value things more when you own them</li>
						<li><b>Meritocracy:</b> Your growth is based entirely on what you do and how you do it</li>
						<li><b>Diversity: </b> wide range of voices and perspectives make us stronger</li>
						<li><b>Creativity & Innovation:</b> ways to do things differently to make them better</li>
						<li><b>Authenticity:</b> Be a hard-working, good person</li>
					</ul>
				</p>
				<p>	
					<b><h3>Our Employee Value Proposition</h3></b>
					<ul>
						<li><b>Big Dream:</b> are driven by a big dream, working 
							together to build the most loved restaurant brands in the world.</li>
						<li><b>Big Responsibility: </b> believe in quick service without compromises. That means quality, real ingredients, 
							social purpose and accountability for what we put into the world.</li>
						<li><b>Growth:</b> We have over 27,000 locations in 100+ countries with plans to reach more than 40,000 locations in the coming years. 
							This growth, coupled with our culture of meritocracy, creates opportunities for all of us.</li>
						<li><b>Hard Working Good People: </b> attract diverse and driven talent, who are the owners of our vision. 
							We are hard working people – and fundamentally good at our core.</li>	
						<li><b>Hospitality Culture:</b> We get excited to welcome hundreds of millions of people to our restaurants every 
							year – in all of the languages, countries and communities that we serve around the planet.</li>
						<li><b>Real Ownership:</b> We help our teams become actual owners of our business, with compensation that allows us 
							to acquire substantial share ownership as our responsibilities and contributions grow. We are trusted to own and deliver on our area of the business as partners – not just as employees.</li>					
					</ul>
				</p>
			
		</div>
		<br>
		<hr>
		<br>
		<!-- Start ADMIN -->
		<div class="container">
		<div data-aos="fade-up">
			<div class="heading-title text-center">
				<div class="section-title">
					<h2>OWNER</h2>
				</div>
			</div>
			
		<div class="team-box">

                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="./images/stuff-img-01.jpg" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Pradip Jadav</h3>
                                        <p></p>
                                        <ul class="team-social">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="./images/stuff-img-01.jpg" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3> Keyur Bhut </h3>
                                        <p></p>
                                        <ul class="team-social">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="./images/stuff-img-01.jpg" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Darshan Dhandhukiya</h3>
                                        <p></p>
                                        <ul class="team-social">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end team-box -->
					<br>
		<!-- END ADMIN -->
		
		
		<!-- Start TEAM -->
<!--
		<div class="customer-reviews-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
					<h2>OUR TEAM</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mr-auto ml-auto text-center">
					<div id="reviews" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner mt-4">
							<div class="carousel-item text-center active">
								<div style="display: inline-block; margin:5%">
									<div class="img-box p-1 border rounded-circle m-auto">
										<img class="d-block w-100 rounded-circle" src="./images/avt-img.jpg" alt="">
									</div>
									<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
									<h6 class="text-dark m-0">Web Developer</h6>
								</div>

								
							</div>
							<div class="carousel-item text-center">
								<div style="display: inline-block; margin:5%">
									<div class="img-box p-1 border rounded-circle m-auto">
										<img class="d-block w-100 rounded-circle" src="./images/avt-img.jpg" alt="">
									</div>
									<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
									<h6 class="text-dark m-0">Web Developer</h6>
								</div>
							</div>
							<div class="carousel-item text-center">
								<div style="display: inline-block; margin:5%">
									<div class="img-box p-1 border rounded-circle m-auto">
										<img class="d-block w-100 rounded-circle" src="./images/avt-img.jpg" alt="">
									</div>
									<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
									<h6 class="text-dark m-0">Web Developer</h6>
								</div>
							</div>
							<div class="carousel-item text-center">
								<div style="display: inline-block; margin:5%">
									<div class="img-box p-1 border rounded-circle m-auto">
										<img class="d-block w-100 rounded-circle" src="./images/avt-img.jpg" alt="">
									</div>
									<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
									<h6 class="text-dark m-0">Web Developer</h6>
								</div>
							</div>
							<div class="carousel-item text-center">
								<div style="display: inline-block; margin:5%">
									<div class="img-box p-1 border rounded-circle m-auto">
										<img class="d-block w-100 rounded-circle" src="./images/avt-img.jpg" alt="">
									</div>
									<h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong></h5>
									<h6 class="text-dark m-0">Web Developer</h6>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
							<span class="sr-only">Next</span>
						</a>
                    </div>
				</div>
			</div>
		</div>
	</div>
-->
		<!-- END TEAM -->

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
    }
    else
    {
        header("Location:index.php");
    }
?>