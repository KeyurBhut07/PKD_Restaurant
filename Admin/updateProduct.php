<?php 
    session_start();
   if($_SESSION['email']!= "")
    {
        include_once '../database.php';
        $p_id = $_GET['pid'];
        $sql = mysqli_query($conn,"SELECT * FROM product WHERE p_id='".$p_id."'");

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Update Product | Restaurants</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <?php 
        include 'AdminHeader.php';
    ?>

    <div>
        <a class="btn btn-info" href="AdminMenuList.php" style='font-size:20px;background-color: #d65106'><i class='fa fa-arrow-left' style='font-size:20px'></i>&nbsp;Back</a>
        <br>
        <br>
    </div>
  
    <center>
        <div class="col-lg-8" style="box-shadow:
                 inset 0 -3em 3em rgba(0,0,0,0.1),
                 0 0  0 2px rgb(255,255,255),
                 0.3em 0.3em 1em rgba(0,0,0,0.3);padding: 10px;">
            <h2>Fill Details</h2>
            <form method="post" enctype="multipart/form-data">
                <?php 
                    if(mysqli_num_rows($sql)>0)
                    {
                       while($row = mysqli_fetch_array($sql))
                       { 
                    
                ?>
                <div class="control-group" >
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['p_Name']; ?>" placeholder="Product Name" required="required" />
                    <p class="help-block text-danger"></p>
                </div>

                <div class="control-group">
                    <select class="form-control" name="type" required>
                        <option>-- Select Product Type --</option>
                        <?php 
                            $query = mysqli_query($conn,"SELECT * FROM p_type");

                            if (mysqli_num_rows($query)>0) 
                            {
                                while ($row1 = mysqli_fetch_array($query)) {
                                    
                                  
                        ?>
                        <option value="<?php echo $row1['Name'];?>"><?php echo $row1['Name'];?></option>
                        <?php 
                                }
                            }
                        ?>
                    </select>
                    <p class="help-block text-danger"></p>
                </div>
                
                <div class="control-group">
                    <label class="help-block text-danger" style="float:left;"><b>*Price ($): </b></label>
                    <input type="text" class="form-control" id="mobile" name="price" value="<?php echo $row['p_Price']; ?>$" placeholder="Price in $" required="required"  />
                    <p class="help-block text-danger"></p>
                </div>

                <div class="control-group">
                    <input type="text" class="form-control" id="name" name="Description" value="<?php echo $row['p_Description']; ?>" placeholder="Product Description" required="required" />
                    <p class="help-block text-danger"></p>
                </div>

                <div class="control-group">
                    <label class="help-block text-danger" style="float:left;"><b>*Select Product Photo: </b></label>
                    <input type="file" class="form-control" name="uploadfile" pl required="required" />
                    <p class="help-block text-danger"></p>
                </div>

                
                <div>
                    <center>
                        <input class="btn2" type="submit" name="add" value="Update"/>
                </div>
               <?php 
                    }
                }
               ?>
            </form>
        </div>
    </center>
    <?php 
        include 'AdminFooter.php';
    ?>
</body>
</html>
 <?php 
    if(isset($_POST['add']))
    {

        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../Product/".$filename;
        move_uploaded_file($tempname,$folder);
        if($filename!="")
        {
            $query = "UPDATE product set p_Name='".$_POST['name']."',p_Type='".$_POST['type']."',p_Price='".$_POST['price']."',p_Description='".$_POST['Description']."', p_photo= '$folder' WHERE p_id='".$p_id."'";
            $data = mysqli_query($conn,$query);
        }
        //<---------- for uploadd file cover --------->
        if ($data) 
        {
            echo "<script language='javascript'>alert('Record Update Sucessfully')</script>";
            header("Location:AdminMenuList.php");
        }
        else
        {
            echo "<script language='javascript'>alert('Something Went Wrong..!!')</script>";
        }
        
    }

?>

<?php 
    }
    else
    {
        header("location:admin");
    }
?>