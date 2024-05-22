<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:signin.php");
}


    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            box-sizing: border-box;
            width: 100%;
        }
        tr:nth-child(even) {
        background-color: #D6EEEE;
}
        .tbl{
            border-collapse: collapse;
            margin-left: auto;
            margin-right: auto;
        }
        .button{
            padding: auto;
            width: 100px;
            height: 50px;
            background-color: black;
            
            

        }
        .button>a{
            text-decoration: none;
            outline: none;
            color: white;
            
            
            
        }
        td{
            padding: 5px;
        }
    </style>
</head>
<body>
<button class="button" name="view"><a href="dashboard.php">Dashboard</a></button>

<table border="1" class="tbl">
    <tr>
        <th><h2>Id</h2></th>
        <th><h2>Name</h2></th>
        <th><h2>Mobile</h2></th>
        <th><h2>User Address</h2></th>
        <th><h2>Action</h2></th>
    </tr>

    <?php
    include("db_connect.php");
      
      $sql="select * from address_book";
    $result=mysqli_query($con,$sql);

        while ($row=mysqli_fetch_array($result)) {
            ?> <tr>
                <td><h3><?php echo $row["id"]  ?></h3></td>
                <td><h3><?php echo $row["Name"]  ?></h3></td>
                <td><h3><?php echo $row["Mobile"]  ?></h3></td>
                <td><h3><?php echo $row["User_Address"]  ?></h3></td>
                <td><a href="update.php?id= <?php echo $row['id'];?>">Update</a> #
                <a href="delete.php?id= <?php echo $row['id'] ; ?>">Delete</a></td>
                
            </tr> <?php

            
        }
        

    ?>
    
</table>
    
</body>
</html>