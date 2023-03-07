<?php 
    session_start();
    if($_SESSION['email']!= "")
    {
        include '../database.php';

        $query = mysqli_query($conn , "SELECT  * FROM  user");
    
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <title>Admin | UserList</title>
</head>
<body>
    <?php 
        include 'AdminHeader.php';
    ?>
    <div class="heading-title text-center">
		<h2>User List</h2>
	</div>
    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile Number</th>
                                <th>City</th>
                                <th>District</th>
                                <th>Zip Code</th>
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
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['city'];?></td>
                                <td><?php echo $row['distric'];?></td>
                                <td><?php echo $row['zipcode'];?></td>
                                <td><?php echo $row['address'];?></td>
                                
                                
                                <td>                
                                    <a href="deletUser.php?email=<?php echo $row['email']?>"><i class="fa fa-trash-o" style="font-size:30px; color: black;"></i></a>
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