
<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:signin.php");
}


    

?>


<?php
include("db_connect.php");
$num=0;
$id=$_GET["email"];
    echo $id;

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $address=$_POST["address"];    
    $mobile=$_POST["mobile"];

    $sql="select * from address_book where Mobile='$mobile'";
    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result)> 0){
        $error= "user already added";
    }
    else{
        $sql="insert into address_book(Name,Mobile,User_Address) values ('$name','$mobile','$address')";
        $result=mysqli_query($con,$sql);
        if($result){
            $error2="success to insert";
        }
    }


}
?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: whitesmoke;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  width: 50%;
  margin: 0 auto;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<button class="button button3" name="view"><a href="view.php">View Records</a></button>

<form action="" method="post">
  <div class="container">
    <h1>Insert</h1>
    
    <hr>
    
    <h1><?php echo isset($error)? $error:"" ;?></h1>
    <h1><?php echo isset($error2)? $error2:"" ;?></h1>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="mobile"><b>Mobile</b></label>
    <input type="text" placeholder="Enter Mobile" name="mobile" id="mobile" required>



    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" id="address" required>

    

    <button type="submit" name="submit" class="registerbtn">INSERT</button>
  </div>
  
  
</form>

</body>
</html>
