<?php 
    session_start();
   if($_SESSION['email']!= "")
    {

       include '../database.php';

        $query = mysqli_query($conn , "SELECT * From contact");
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <title>Admin | Contact</title>
</head>
<body>
    <?php 
        include 'AdminHeader.php';
    ?>
    <div class="heading-title text-center">
		<h2>Contact</h2>
	</div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
               
                    if(mysqli_num_rows($query)>0)
                    {
                        while($row=mysqli_fetch_array($query))
                        {

                       
                ?>
                <tr>
                    
                    <td> <?php echo $row["name"]?> </td>
                    <td> <?php echo $row["email"]?> </td>
                    <td> <?php echo $row["subject"]?> </td>
                    <td> <?php echo $row["message"]?> </td>
                    
                    <td>                
                        <a href="deletContact.php?email=<?php echo $row["email"]?>"><i class="fa fa-trash-o" style="font-size:30px; color: black;"></i></a>
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