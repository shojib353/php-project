<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:signin.php");
}


    

?>



<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #04AA6D; /* Green */
  border: none;
  color: white;
  padding: 16px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  
  transition-duration: 0.4s;
  cursor: pointer;
}



.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
  
}
.button3>a,.button2>a{
    width: fit-content;
    padding: 16px 16px;
    text-decoration: none;
    color: black; 
    

}

.button3:hover{
  background-color: #f44336;
  color: white;
}
.button3:hover a{
  
  color: white;
}
.button2:hover a{
    color: white;
}
.navarea{
    width: 100%;
    height: 60px;
    background-color: black;
    position: relative;
}
.navarea>h1{
    color: wheat;
    margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  
}
.navarea>a{
    color: white;
    margin: 0;
  position: absolute;
  top: 50%;
  left: 90%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-decoration: none
  
}
.logout:hover{
    background-color: white;
    color: black;
    padding: 15px;
}
.address{
    border: 1px solid black;
    padding: 10px;
}



</style>
</head>
<body>
    <div class="navarea">
        <h1>DASHBOARD</h1>

        <a class="logout" href="logout.php">LOG OUT</a>
    </div>



<div>
<h2 class="address">Address Book :</h2>
<button class="button button2" name="insert"><a href="insert.php?email= <?php echo $_SESSION['email']; ?>">Insert New Record</a></button>
<button class="button button3" name="view"><a href="view.php">View Records</a></button>
</div>


</body>
</html>


