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
        font-size:15px;
        padding: 5px;
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
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css"> 
    <link rel="stylesheet" href="./css/AdminStyle.css">   
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">

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
				<a class="navbar-brand" href="AdminDeshboard.php">
					<img src="../images/PKD.png" alt="" height="97px" style="border-radius: 50%" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="AdminDeshboard.php">Home</a></li>

						<li class="nav-item"><a class="nav-link" href="AdminUserList.php">User</a></li>

						<div class="dropdown">
						<li class="nav-item"><a class="nav-link" href="AdminMenuList.php">Menu</a></li>
                        <!--
                        <div class="dropdown-content">
                                <a href="#">Pizza</a>
                                <a href="#">FastFood</a>
                                <a href="#">Burgger</a>
                                <a href="#">All Dishes</a>
                                <a href="#">Juice</a>
                                <a href="#">Colddrinks</a>
                            </div>
                          -->
						</div>
						<li class="nav-item"><a class="nav-link" href="AdminReservationList.php">Reservation</a></li>

						<li class="nav-item"><a class="nav-link" href="AdminOrderList.php">Order</a></li>

						<li class="nav-item"><a class="nav-link" href="AdminContact.php">Contact</a></li>

						<li class="nav-item"><a class="nav-link" href="AdminFeedback.php">Feedback</a></li>
						
                            
						<li class="nav-item active"><a class="nav-link" href="AdminLogout.php">Logout</a></li>

					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
	
      <br>
      <br> <br> <br> <br> <br>
	<!-- End Customer Reviews -->
	
	
	
	
</body>
</html>