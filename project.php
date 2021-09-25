
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

$query="SELECT * FROM projectinfo";
$result=mysqli_query($conn,$query);
$check_data=mysqli_num_rows($result)>0;

?>
<!DOCTYPE html>
<html>
<head>
	<title>CodeTech</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/project.css?v=<?php echo time(); ?>">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>



  <header>
    
	 
	<div class="head">

	<h2><span class="fo">Code</span>Tech</h2>
          <nav>
                    
                       
                        <a href="index.php">Home</a>
                        <a href="explore.php">Explore</a>
                        <a href="project.php">Project</a>
                       <a href="logout.php">Logout</a>
                
           </nav>

       
   </div> 
   </header>

<main>
  <?php
  if($check_data)
{
while($row=mysqli_fetch_array($result))
{


    ?>
     <section class="main-card--cointainer">
                <div class="card-container" key={curElem.id}>
            <div class="card">
            <div class="card-body">
            <span class="card-number card-circle subtle"><?php echo $row['id']; ?></span>
              <span class="card-author subtle">Shaurya</span>
              <h2 class="card-title"><?php echo $row['projectname']; ?></h2>
              <span class="card-description subtle">
                 <?php echo $row['description']; ?>
              </span>
              <div class="card-read">Read</div>
            </div>
            <img src="image/e-com.jpg" alt="img" class="card-media"></img>
            <span class="card-tag subtle" id="git" onclick="location.href='<?php echo $row['Github']; ?>';">Github</span>
          </div>
        </div>   
         <div class="info">

          <a href=""><button>Chat now</button></a>
         </div>
     

        </section>
           
          
          
              

    <?php
    }  
 
    }  
    ?>
   
</main>




<footer id="footer">
   <div class="foot">
    <h3>CodeTech</h3>
    <p>Please share the website link.Lets make it helpful for others.</p>
    <ul class="social">
     <a href="https://www.facebook.com/shaurya.srivastava.908/"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/shaurya-srivastava-304765187/"><i class="fab fa-linkedin-in"></i></a>
      
      

      
    </ul></div>
  <div class="foot-bottom">
    <p>Copyright &copy;2021 CodeTech.designed by <span>Shaurya</span></p>
    
  </div>
</footer>

<script type="text/javascript">
  function.myFunction(){
    document.getElementById("git")

  }
</script>

</body>
</html>