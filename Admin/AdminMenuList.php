<?php 
    session_start();
   if($_SESSION['email']!= "")
    {
        include_once '../database.php';
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <title>Admin | Menu List</title>
</head>
<body>
    <?php 
        include 'AdminHeader.php';
    ?>
    <div class="heading-title text-center">
		<h2>Product List</h2>
	</div>
    <div>
        <a class="btn btn-info" href="AddProduct.php" style="font-size: 18px; background-color: #d65106"><i class="fa fa-plus" style="font-size: 20px"></i> Add Product</a>

        <a class="btn btn-info" href="" onclick="window.print()" style="float: right;font-size: 20px;padding-right: 10px; background-color: #d65106"><i class="fa fa-print" style="font-size:20px"></i> Print</a>   
    </div>
    <div class="container" >
        <select class="table table-striped" style="height: 40px;font-size: 18px">
        <option>Search</option>
         <?php 
            $query = mysqli_query($conn,"SELECT * FROM p_type");

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
    </div>
    
    <br>
        <div class="container" style="box-shadow:
                 inset 0 -3em 3em rgba(0,0,0,0.1),
                 0 0  0 2px rgb(255,255,255),
                 0.3em 0.3em 1em rgba(0,0,0,0.3);" >
         <table class="table table-striped" style="text-align: center" id="cart" id="myTable">
            <thead>
                <tr>
                    <th colspan="8"><h2>Product LIst</h2></th>
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th colspan="2">Maintain</th>
                </tr>
            </thead>
           <tbody>
            <?php 
               // if(isset($_POST['Pizza']))
               // {
                   $all_query = mysqli_query($conn,"SELECT * FROM product");
                   if (mysqli_num_rows($all_query)>0)
                   {
                       while($row = mysqli_fetch_array($all_query))
                       {
            ?>
                            <tr>
                                <td><?php echo $row['p_id']; ?></td>
                                <td><?php echo $row['p_Name']; ?></td>
                                <td id="myList"><?php echo $row['p_Type']; ?></td>
                                <td><?php echo $row['p_Price']; ?></td>
                                <td><?php echo $row['p_Description']; ?></td>
                                <td><img src="<?php echo $row['p_photo']; ?>" height=50px width=100px></td>
                                <td>
                                    <a href="updateProduct.php?pid=<?php echo $row['p_id']; ?>"><i class="fa fa-edit" style="font-size:30px; color: black;"></i></a>      
                                 </td>
                                <td>
                                    <a href="deleteProduct.php?pid=<?php echo $row['p_id']; ?>"><i class="fa fa-trash-o" style="font-size:30px; color: black;"></i></a>
                                </td>

                            </tr>
            <?php
                       }
                   }
                //}
            ?>
            </tbody>
           
            
            
            
                
            </tbody>
           
            
        </table>
            
                
            
    </div>

    <?php 
        include 'AdminFooter.php';
    ?>
    <script type="text/javascript">
        function filter() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("mylist");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[2];
                    if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
    </script>
</body>
</html>
<?php 
    }
    else
    {
        header("location:admin");
    }
?>