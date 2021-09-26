<?php

$servername = "sql212.epizy.com";
$username = "epiz_29862922";
$password = "rH6RjVyLJk2ch";
$database="epiz_29862922_codetechdata";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




mysqli_select_db($conn,' codetechdb');

$name=$_POST['name'];
$email=$_POST['email'];


$query= "INSERT INTO contact (name,email) 
VALUES( '$name','$email')";


$res=mysqli_query($conn,$query);

if($res)
{
	echo "<script> 
	window.location='index.php';
                                    
                           </script>";
                       
}


?>