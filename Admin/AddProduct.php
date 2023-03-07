<?php 
    session_start();
   if($_SESSION['email']!= "")
    {
        include_once '../database.php';
        $query = mysqli_query($conn,"SELECT * FROM p_type");
        
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Add Product | Restaurants</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <?php 
        include 'AdminHeader.php';
    ?>

    <div class="heading-title text-center">
        <h2>Product List</h2>
    </div>

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

                <div class="control-group" >
                    <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" required="required" />
                    <p class="help-block text-danger"></p>
                </div>

                <div class="control-group">
                    <select class="form-control" name="type" required>
                        <option>-- Select Product Type --</option>
                        <?php 
                            if (mysqli_num_rows($query)>0) 
                            {
                                while ($row = mysqli_fetch_array($query)) {
                                    
                                  
                        ?>
                        <option value="<?php echo $row['Name'];?>"><?php echo $row['Name'];?></option>
                        <?php 
                                }
                            }
                        ?>
                    </select>
                    <p class="help-block text-danger"></p>
                </div>
                
                <div class="control-group">
                    <label class="help-block text-danger" style="float:left;"><b>*Price ($): </b></label>
                    <input type="text" class="form-control" id="mobile" name="price" placeholder="Price in $" required="required"  />
                    <p class="help-block text-danger"></p>
                </div>

                <div class="control-group">
                    <input type="text" class="form-control" id="name" name="Description" placeholder="Product Description" required="required" />
                    <p class="help-block text-danger"></p>
                </div>

                <div class="control-group">
                    <label class="help-block text-danger" style="float:left;"><b>*Select Product Photo: </b></label>
                    <input type="file" class="form-control" name="uploadfile" pl required="required" />
                    <p class="help-block text-danger"></p>
                </div>

                
                <div>
                    <center>
                        <input class="btn2" type="submit" name="add" value="Add"/>
                </div>
               
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
            $query = "INSERT INTO product(p_Name, p_Type, p_Price, p_Description,p_photo) VALUES('".$_POST['name']."','".$_POST['type']."','".$_POST['price']."','".$_POST['Description']."','$folder')";
            $data = mysqli_query($conn,$query);
        }
        //<---------- for uploadd file cover --------->
        if ($data) 
        {
            echo "<script language='javascript'>alert('Record inserted Sucessfully')</script>";
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