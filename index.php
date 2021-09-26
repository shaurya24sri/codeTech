
<!DOCTYPE html>
<html>
<head>
	<title>CodeTech</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.convform.css">
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.convform.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>
<body>
  <!--Chatbot--->
 <div class="chat-icon">
<i class="fas fa-comment-dots"></i>
 </div>
<div class="chat-box">
  <div class="my-conv-form-wrapper">
    <form action="contact.php" method="POST" class="hidden">

      <select data-conv-question="Hello! How can I help you" name="category">
        <option value="Applyproject">Apply with project ?</option>
        <option value="Workonproject">Work on project?</option>
      </select>

      <div data-conv-fork="category">
        <div data-conv-case="Applyproject">
          <input type="text" name="domainName" data-conv-question="Please, tell me your domain name">    
        </div>
        <div data-conv-case="Workonproject" data-conv-fork="first-question2">
          <input type="text" name="companyName" data-conv-question="Please, enter your your skill & experience">
          
        </div>
       
      </div>

      <input type="text" name="name" data-conv-question="Please, Enter your name">

      <input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">

      <input data-conv-question="Enter your e-mail" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="email" required placeholder="What's your e-mail?">

      <select data-conv-question="Please Conform">
        <option value="Yes" type="submit">Confirm</option>
      </select>
       <select data-conv-question="Thank you!!.Have a nice day">
        <option value="Yes">Ok</option>
      </select>

    </form>
  </div>
</div>

  


  <header>
    
	 
	<div class="head">

	<h2><span class="fo">Code</span>Tech</h2>
          <nav>
                    
                       
                        <a href="auth.html">Login</a>
                        <a href="explore.php">Explore</a>
                        <a href="project.php">Project</a>
                       <a href="#faq">About us</a>
                       <a href="logout.php">Logout</a>
                
           </nav>

       
   </div> 
   </header>



  <main>
			<section class="left">
				
				<h1><b>Make it Simple</b></h1>
				<p>
				This is a website for you to start applying your kowledge and make changes with Experience.
				</p>
				
				  <form action="explore.php">
                   <button >
                 START EXPLORING <i class="fi-bs-arrow-right"></i>
                   </button>
          </form>
               
               
        </section>


        <section class="port_image">
          				<img src="image/code4.png">
        </section>
</main>

<div class="half">
		 <section class="below" id="faq">
      <div class="box">
        <p class="heading">FAQ</p>
        <div class="faqs">
          <details>
            <summary>What is the program for?</summary>
            <p class="text">This program is for biggners where you can kickstart your journey by joining this program</p>
          </details>
           <details>
            <summary>Is this program for free?</summary>
            <p class="text">This program is absolutely free.</p>
          </details>
           <details>
            <summary>What is the deadline to apply for this program?</summary>
            <p class="text">There is no such deadline it all depends on the project admin and his specified work duration.</p>
          </details>
           <details>
            <summary>I am absolutely biggner.Is this program for me?</summary>
            <p class="text">Yes.Bignners are always welcome.You can join this program.</p>
          </details>
           <details>
            <summary>What is the program for?</summary>
            <p class="text">This program is for biggners as well you can kickstart your journey by joining this program</p>
          </details>
          
        </div>
      </div>
       
     </section>
<div>






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


</body>
</html>