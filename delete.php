
<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:signin.php");
}


    

?>


<?php
 include "db_connect.php";

 $id=$_GET['id'];

 $query=mysqli_query($con,"delete from address_book where id='$id' ");

    if($query)
    {
    	echo "deleted";
        header("location:view.php");
    }

    

    // session_unset();
?>