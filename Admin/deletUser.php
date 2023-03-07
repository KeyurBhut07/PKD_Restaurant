<?php

    include '../database.php';
    $query = "DELETE FROM user WHERE email='".$_GET['email']."'";
    if(mysqli_query($conn,$query))
    {
        echo "<script>alert('Record Delete Successfully.....!')</script>";
        header("Location:AdminUserList.php");
    }
    else
    {
        echo "<script>alert('Something Went Wronge.....!')</script>";

    }

?>