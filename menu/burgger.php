<?php 

    include_once '../database.php';
    $query = mysqli_query($conn,"SELECT * FROM product WHERE p_Type='BURGGER' ");
   
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
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
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootsrtap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/uikit.min.css" />
    <script src="../js/uikit.min.js"></script>
        <script src="../js/uikit-icons.min.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
.grid { 
  display: grid;
  grid-template-columns: 0.5fr 0.5fr 0.5fr;
  grid-gap: 20px;
  padding: 30px 75px;
  }
.grid > article {
  border: 1px solid #ccc;
  margin-top:0px;
  box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
}
.grid > article img {
  max-width: 100%;
  
}
.text {
  padding: 10px 10px 10px;
    height: 100px;
}
.btn2 {
    padding:10px 10px;
    font-size: px;
    font-weight: 600;
    letter-spacing: 1px;
    color: #092a49;
    background: none;
    border: 3px solid #d65106;
    border-radius: 15px;
    transition: .3s;
}

.btn2:hover {
    color: white;
    background:#d65106
}
.gridbtn{
    padding:10px;
}
</style>
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
</head>

<body>

    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="../images/PKD.png" alt="" height="97px" style="border-radius: 50%" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="../home.php">Home</a></li>
                        
                        <li class="nav-item active"><a class="nav-link" href="../menu.php">Menu</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="../reservation.php">Reservation</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="../order.php">Order</a></li>

                        <li class="nav-item "><a class="nav-link" href="../about.php">About</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>

                        <li class="nav-item"><a class="nav-link" href="../feedback.php">Feedback</a></li>
                        <div class="dropdown">
                            <li class="nav-item "><a class="nav-link" href="../profile.php"><i class="fa fa-user" style="font-size:24px"></i></a></li>
                            <div class="dropdown-content">
                                <a href="../editProfile.php">Edit Profile</a>
                                <a href="../logout.php">Logout</a>
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
                    <h1>BURGGER</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End header -->

    <main class="grid">
  
  
     <?php 
    if(mysqli_num_rows($query)>0)
    {
       
         while ($row = mysqli_fetch_array($query)) {
        
    ?>
  
    <article>
        <img src="<?php echo $row['p_photo'];?>" alt="Sample photo" height=250px width=100%>
        <div class="text">
            <div style="display:inline-block;">
                <h3><?php echo $row['p_Name'];?></h3>
            </div>  
            <div style=" float:right">
                <h3><?php echo $row['p_Price'];?>$</h3>
            </div>  
            <h4><?php echo $row['p_Description'];?></h4>
        </div>
        <div class="gridbtn">
            
           <button class="btn2" name="cart" type="submit" onclick="window.location.href = '../AddToCart.php?p_id=<?php echo $row['p_id']; ?>' ">
                <i class="fa fa-shopping-cart"   style="font-size:30px"></i>
            </button> 

             <button class="btn2" type="submit"  style="font-size:20px;letter-spacing: 3px; width:200px; float:right;" onclick="window.location.href = '../order.php?p_id=<?php echo $row['p_id']; ?>' ">ORDER</button>
        </div>
        
  </article>
 
  <?php 

        }
    }
  ?>

</main>
    
    <!-- Start Footer -->
    <?php

    include '../footer.php';

    ?>
    <!-- End Footer -->
    
    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

    <!-- ALL JS FILES -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/jquery.superslides.min.js"></script>
    <script src="../js/images-loded.min.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/baguetteBox.min.js"></script>
    <script src="../js/form-validator.min.js"></script>
    <script src="../js/contact-form-script.js"></script>
    <script src="../js/custom.js"></script>
</body>
</html>