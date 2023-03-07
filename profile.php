<?php 
    session_start();
    include 'database.php';
    if($_SESSION['email']!= "")
    {
        $email = $_SESSION['email'];
        $q= "SELECT * FROM user WHERE email= '".$email."' ";
        $result=$conn->query($q);
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
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
<title>Profile</title>
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

    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
<a class="navbar-brand" href="home.php">
<img src="images/PKD.png" alt="" height="97px" style="border-radius: 50%" />
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbars-rs-food">
<ul class="navbar-nav ml-auto">
<li class="nav-item "><a class="nav-link" href="home.php">Home</a></li>

<li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>

<li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>


<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>

<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>


<li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>


<div class="dropdown">
<li class="nav-item active"><a class="nav-link" href="profile.php"><i class="fa fa-user" style="font-size:24px"></i></a></li>
  <div class="dropdown-content">
    <a href="editProfile.php">Edit Profile</a>
    <a href="logout.php">Logout</a>
  </div>
</div>

 </header>

<!--Profile Start-->
<

<!--Profile End-->

</ul>
</div>
</div>
</nav>
</header>
<br>
<br><br>
<br>
<br>
<section id="doctors" class="doctors section-bg">
            <div class="container rounded bg-white mt-5 mb-5" data-aos="fade-up" style="box-shadow:
                 inset 0 -3em 3em rgba(0,0,0,0.1),
                 0 0  0 2px rgb(255,255,255),
                 0.3em 0.3em 1em rgba(0,0,0,0.3);">

                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                            <?php
                                $dp_query = mysqli_query($conn,"SELECT photo FROM user where email = '".$email."'  ");
                                $row1 = mysqli_fetch_array($dp_query);
                                if($row1['photo']=="")
                                {
                            ?>
                                <img  class="rounded-circle mt-5" width="150px" src="./images/person.png" class="dpimg">
                            <?php     
                                }
                                else
                                {
                                    echo "<img  class='rounded-circle mt-5' width='150px' src='".$row1['photo']."' class='dpimg'>";
                                }
                            ?>
                            
                            <span class="font-weight-bold"><?php echo $row["name"]; ?></span>
                        </div>
                    </div>
                    <div class="col-md-8 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">Name</label>
                                    <input type="text" class="form-control"name="name" placeholder="Name" value="<?php echo $row["name"]; ?>" readonly ></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">Email ID</label>
                                    <input type="text" class="form-control" name="email" placeholder="enter email id" value="<?php echo $row["email"]; ?>" readonly></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile" placeholder="enter phone number" value="<?php  echo $row['mobile']; ;?>"readonly>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label class="labels">City</label>
                                            <input type="text" class="form-control" name="city" placeholder="enter your City" value="<?php  echo $row['city']; ;?>"readonly>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="labels">Distric</label>
                                            <input type="text" class="form-control" name="district" placeholder="enter your  Distric" value="<?php  echo $row['distric']; ;?>" readonly>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <label class="labels">ZipCode</label>
                                            <input type="text" class="form-control" name="zipcode" placeholder="enter Zipcode" value="<?php  echo $row['zipcode']; ;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <label class="labels">Address</label>
                                            <textarea class="form-control" name="address" placeholder="enter address " value="" readonly><?php  echo $row['address']; ;?></textarea>
                                            
                                        </div>
                                    </div>

                                    <!-- <div class="mt-5 text-center"><button class="btn2" type="button">Save Profile</button></div>-->
                                   
                                </div>

                            </div>

                            <?php
                
            }
            ?>
                        </div>

                    </div>

                </div>

            </div>
            
        </section>
         <br>
        <section>
            <div class="container" style="box-shadow:
                 inset 0 -3em 3em rgba(0,0,0,0.1),
                 0 0  0 2px rgb(255,255,255),
                 0.3em 0.3em 1em rgba(0,0,0,0.3);">
             <table class="table table-striped" style="text-align: center" id="cart">
                <thead>
                    <tr>
                        <th colspan="2" style="font-size:36px">Shopping  Cart <i class="fa fa-shopping-cart"></i></th>

                        <th style="font-size:30px">Price</th>
                        
                         <th colspan="2" style="font-size:30px">Action</th>
                    </tr>
               
            </thead>
             <tbody>
            <?php 
                $product = mysqli_query($conn,"SELECT * FROM cart where user_id='".$_SESSION['id']."' ");
                if(mysqli_num_rows($product))
                {
                    while ($row = mysqli_fetch_array($product)) 
                    {
                        $p_id = $row['p_id'];
                        $p_details = mysqli_query($conn,"SELECT * FROM product WHERE p_id='".$p_id."' ");
                        if(mysqli_num_rows($p_details))
                        {
                            while($res = mysqli_fetch_array($p_details))
                            {
            ?>
          
           
                <tr>
                    <td><img src="Product/<?php echo $res['p_photo']; ?>" style="border-radius: 20px; height:150px; width:150px" ></td>
                    <td>
                        <h1><?php echo $res['p_Name']; ?></h1>
                        <h3><?php echo $res['p_Description']; ?></h3>
                    </td>
                    <td id="price"><?php echo $res['p_Price']; ?>$</td>
                    
                    <td>
                        <input type="submit" style="height: 50px; width:100px; background-color:#d65106; border-radius:20px"  name="order" value="Orer" onclick="window.location.href = 'order.php?p_id=<?php echo $p_id; ?>' ">
                    </td>
                    <td>
                        <input type="submit" style="height: 50px; width:100px; background-color:#d65106; border-radius:20px" value="Remove" onclick="window.location.href = 'RemoveCart.php?p_id=<?php echo $p_id; ?>' ">
                    </td>
                </tr>
                <script type="text/javascript">
                   jQuery(function($) {
                      $('#mirror').text($('#alice').val());

                      $('#alice').on('input', function() {
                        $('#mirror').text(($('#alice').val()) * ($('#price').text()));
                      });
                    });
                </script>
              <?php
                            }
                        }
                    }
                }
            ?>
            </tbody>
            </table>
        </div>
        </section>
        <br>
        <section>
             <div class="container" style="box-shadow:
                 inset 0 -3em 3em rgba(0,0,0,0.1),
                 0 0  0 2px rgb(255,255,255),
                 0.3em 0.3em 1em rgba(0,0,0,0.3);" >
            <?php 
                include 'reservationList.php';
            ?>
             </div>
        </section>

</body>
</html>

<?php 
    include 'footer.php';
  }
  else
  {
    header("Location:index.php");
  }
?>