<?php 
    session_start();
   if($_SESSION['email']!= "")
    {
        include '../database.php';
        $query= mysqli_query($conn,"SELECT * FROM reservation");
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <title>Admin | Reservation List</title>
</head>
<body>
    <?php 
        include 'AdminHeader.php';
    ?>
    <div class="heading-title text-center">
		<h2>Reservation List</h2>
	</div>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Person</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Food</th>
                    <th>Occasion</th>
                    <th colspan="2"> Action</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php 
                    if(mysqli_num_rows($query))
                    {
                        while($row=mysqli_fetch_array($query))
                        {
                ?>
               
                <tr>
                    <td> <?php echo $row['name'] ?></td>
                    <td> <?php echo $row['email'] ?></td>
                    <td> <?php echo $row['mobile'] ?></td>
                    <td> <?php echo $row['person'] ?></td>
                    <td> <?php echo $row['date'] ?></td>
                    <td> <?php echo $row['time'] ?></td>
                    <td> <?php echo $row['food'] ?></td>
                    <td> <?php echo $row['occasion'] ?></td>
                    
                    
                    <td>
                        <a href="../updateReservation.php?email=<?php echo $row["email"]?>"><i class="fa fa-edit" style="font-size:30px; color: black;"></i></a>    &nbsp;      &nbsp;      
                        <a href="deletReservation.php?email=<?php echo $row["email"]?>"><i class="fa fa-trash-o" style="font-size:30px; color: black;"></i></a>             
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