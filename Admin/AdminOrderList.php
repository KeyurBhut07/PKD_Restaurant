<?php 
    session_start();
   if($_SESSION['email']!= "")
    {
        include '../database.php';

        $query = mysqli_query($conn , "SELECT  * FROM  rorder");
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <title>Admin | Order List</title>
</head>
<body>
    <?php 
        include 'AdminHeader.php';
    ?>
    <div class="heading-title text-center">
		<h2>Order List</h2>
	</div>
    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>SrNo</th>
                                <th>Product Name</th>
                                <th>Product Id</th>
                                <th>User Id</th>
                                <th>User Name</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Zipcode</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                               if($res=mysqli_num_rows($query)>0)
                               {
                                   while($row=mysqli_fetch_array($query))
                                   {
                               
                            ?>
                            <tr>
                                <td><?php echo $row['SrNo'];?></td>
                                <td><?php echo $row['p_name'];?></td>
                                <td><?php echo $row['p_id'];?></td>
                                <td><?php echo $row['user_id'];?></td>
                                <td><?php echo $row['user_name'];?></td>
                                <td><?php echo $row['city'];?></td>
                                <td><?php echo $row['pincode'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['quantity'];?></td>
                                
                                
                                <td>                
                                    <a href="deletUser.php?SrNo=<?php echo $row['SrNo']?>"><i class="fa fa-trash-o" style="font-size:30px; color: black;"></i></a>
                                </td>
                            </tr>
                            <?php
                               }
                            }
                            ?>
                        </tbody>

                    </table>
    <?php 
        include 'AdminFooter.php';
    ?>
</body>
</html>
<?php 
    }
    else
    {
        header("location:admin.php");
    }
?>  