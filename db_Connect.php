<?php 
$con = mysqli_connect("localhost","root","","php");

if($con){
    //echo "db connected";
}
else{
    die("failed to connect". mysqli_connect_error());
}

?>