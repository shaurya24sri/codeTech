<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$database="codetechdb";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




mysqli_select_db($conn,' codetechdb');

$projectname=$_POST['projectname'];
$projectidea=$_POST['projectidea'];
$team=$_POST['team'];
$technology=$_POST['technology'];
$description=$_POST['description'];
$Status=$_POST['Status'];
$Github=$_POST['Github'];

$query= "INSERT INTO projectinfo (projectname,	projectidea,	team,	technology,	description,	Status,Github) 
VALUES( '$projectname','$projectidea','$team','$technology','$description','$Status','$Github')";


$res=mysqli_query($conn,$query);
if($res)
{
	echo "<script> alert('Congratulation!!Your Project is Registered');
	window.location='explore.php';
                                    
                           </script>";
                       
}


?>