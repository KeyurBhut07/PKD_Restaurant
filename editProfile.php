<?php 
    session_start();
    if ($_SESSION['email'] != "") 
    {
        include 'database.php';
       
        $email = $_SESSION['email'];
        $id = $_SESSION["id"];
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
    <form name="f1" method="post">
        <?php
            include 'database.php';

            //$db = mysqli_select_db("student");
            $query = "select * from user where id ='".$id."' ";
            $res = mysqli_query($conn,$query);   
                
                if(isset($_POST["Update"]))
                {
                    echo $id;
                    //$update_query="UPDATE from user set name='".$_POST['name']."',email='".$_POST['email']."',mobile='".$_POST['mobile']."',city='".$_POST['city']."',distric='".$_POST['distric']."',zipcode='".$_POST['zipcode']."',address='".$_POST['address']."' where id= '".$id."' ";
                    $update_query = "UPDATE user SET name='".$_POST['name']."',email='".$_POST['email']."',mobile='".$_POST['mobile']."',city='".$_POST['city']."',distric='".$_POST['distric']."',zipcode='".$_POST['zipcode']."',address='".$_POST['address']."' WHERE id ='".$id."' ";
                    $up_result = mysqli_query($conn,$update_query);
                    $up_row=mysqli_affected_rows($conn);
                    if($up_row>0)
                    {
                        echo "<script language='javascript'>alert('Record Updated Sucessfully')</script>";
                        
                    }
                    else
                    {
                        //echo "<script language='javascript'>alert('Something went Wrong')</script>";
                        
                        header("Location: profile.php");
                    }
                }
            ?>

            <div class="container rounded bg-white mt-5 mb-5" data-aos="fade-up" style="box-shadow:
                 inset 0 -3em 3em rgba(0,0,0,0.1),
                 0 0  0 2px rgb(255,255,255),
                 0.3em 0.3em 1em rgba(0,0,0,0.3);">
            <?php
                while($row = mysqli_fetch_array($res))
                {
            ?>
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

                            <div style="margin-top:20px;">
                                <input type="submit" value="Change" style="border-radius: 5px; width: 100px"  onclick="window.open('uploaddp.php','popUpWindow','height=200,width=600,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');"> 
                                <input type="submit" value="Remove" name="remove" />
                               <?php

                                if(isset($_POST['remove']))
                                {
                                    $delete_query = mysqli_query($conn,"UPDATE user SET photo='' Where email='".$email."' ");
                                    if ($delete_query) 
                                    {
                                        echo "<script language='javascript'>alert('Removed your Display Photo')</script>";
                                    }
                                }
                            ?>
                        </div>
                             
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
                                    <input type="text" class="form-control"name="name" placeholder="Name" value="<?php echo $row["name"]; ?>" required></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">Email ID</label>
                                    <input type="text" class="form-control" name="email" placeholder="enter email id" value="<?php echo $row["email"]; ?>" required></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class="labels">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile" placeholder="enter phone number" value="<?php echo $row["mobile"];?>" required>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label class="labels">City</label>
                                            <input type="text" class="form-control" name="city" placeholder="enter your City" value="<?php  echo $row['city']; ;?>" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="labels">Distric</label>
                                            <input type="text" class="form-control" name="distric" placeholder="enter your  Distric" value="<?php  echo $row['distric']; ;?>" required>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <label class="labels">ZipCode</label>
                                            <input type="text" class="form-control" name="zipcode" placeholder="enter Zipcode" value="<?php  echo $row['zipcode']; ;?>" required >
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <label class="labels">Address</label>
                                            <textarea class="form-control" name="address" placeholder="enter address " value="" readonly><?php  echo $row['address']; ;?></textarea>
                                            
                                        </div>
                                    </div>
                <?php
                    }//while
                ?>
                                     <div class="mt-5 text-center">
                                        <input type="submit" name="Update" class="btn2" value="Save Profile">
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

<?php

include 'footer.php';

?>
</body>
</html>

<?php 
  }
  else
  {
    header("Location:index.php");
  }
?>