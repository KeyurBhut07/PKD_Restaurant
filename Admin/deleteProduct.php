<?php

    include '../database.php';
    $query = "DELETE FROM product WHERE p_id='".$_GET['pid']."'";
    if(mysqli_query($conn,$query))
    {
        echo "<script>alert('Record Delete Successfully.....!')</script>";
        header("Location:AdminMenuList.php");
    }
    else
    {
        echo "<script>alert('Something Went Wronge.....!')</script>";

    }

?>