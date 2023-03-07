<?php

    include '../database.php';

    $query = mysqli_query($conn , "DELETE FROM feedback where email='".$_GET['email']."'");

    if($query)
    {
        echo "<script>alert('Record Delete Successfully.....!')</script>";
        header("Location:AdminFeedback.php");
    }
    else
    {
        echo "<script>alert('Something Went Wronge.....!')</script>";

    }

?>