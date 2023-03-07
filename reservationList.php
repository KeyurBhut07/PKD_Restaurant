<?php 
    
   if($_SESSION['email']!= "")
    {
        include 'database.php';
        $query= mysqli_query($conn,"SELECT * FROM reservation WHERE email = '".$_SESSION['email']."' ");
?>

    <div class="heading-title text-center">
		<h2>Reservation List</h2>
	</div>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>Reservation ID</th>
                    <th>Name</th>
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
                    <td><?php echo $row['SrNo'];?></td>
                    <td> <?php echo $row['name']; ?></td>
                    <td> <?php echo $row['mobile']; ?></td>
                    <td> <?php echo $row['person']; ?></td>
                    <td> <?php echo $row['date']; ?></td>
                    <td> <?php echo $row['time']; ?></td>
                    <td> <?php echo $row['food']; ?></td>
                    <td> <?php echo $row['occasion']; ?></td>
                    
                    
                    <td>
                        <a href="updateReservation.php?rid=<?php echo $row['SrNo']?>"><i class="fa fa-edit" style="font-size:30px; color: black;"></i></a>    &nbsp;      &nbsp;      
                        <a href="reservationDelete.php?rid=<?php echo $row["SrNo"]?>"><i class="fa fa-trash-o" style="font-size:30px; color: black;"></i></a>             
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
            </tbody>
               
        </table>


   
<?php 
    }
    else
    {
        header("location:index.php");
    }
?> 