<?php

    include '../database.php';
    $query= "DELETE FROM reservation WHERE email='".$_GET["email"]."'";
    if(mysqli_query($conn,$query))
    {
        echo "<script>alert('Record Delete Successfully.....!')</script>";
        header("Location:AdminReservationList.php");
    }
    else
    {
        echo "<script>alert('Something Went Wronge.....!')</script>";

    }
?>