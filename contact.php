<?php
session_start();


$message = '';

if(isset($_POST["send"]))
{
    $email = $_SESSION['email'];
	$message = '
		<h3 align="center">Programmer Details</h3>
		<table border="1" width="100%" cellpadding="5" cellspacing="5">
			
            <tr>
				<td width="30%">Email</td>
				<td width="70%">'.$email.'</td>
			</tr>
            
			<tr>
				<td width="30%">Title</td>
				<td width="70%">'.$_POST["title"].'</td>
			</tr>
              
			<tr>
				<td width="30%">Message</td>
				<td width="70%">'.$_POST["message"].'</td>
			</tr>
			  
		</table>
	';	
}

?>
<!DOCTYPE html>	
<html>
<head>
    <title> Contact Us </title>
    <meta charset="UTF-8"/> 
    <meta name="keywords" content="Company Name">
    <meta name="description" content="The description of the coffee shop.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Logo -->
    <link rel='shortcut icon' type='image/x-icon' href='images/coffeelogo.png'/>
    <!-- Bootstrap -->    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- jQuery -->    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script> 
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
    <!-- w3 schools -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
     <!-- Footer -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="style/contact.css">
</head>  
    
  <!-- Navigation bar -->
  <body>
  <?php include "includes/template/nav.php";?>
      
  <!-- Header -->
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="images/coffee28.jpeg" class="d-block w-100" alt="Image 1">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="images/coffee30.jpg" class="d-block w-100" alt="Images 2">
    </div>
    <div class="carousel-item">
      <img src="images/macaroons2.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
   </a>
 </div>
      
      <!-- Contact Us -->
    <center>
       <section id="contact" class="py-5"> 
        <div class="container">
      <div class="row">
    <div class="col-md-12 my-4"> 
    <h1 class="h1"> Contact Us </h1>
    <br> 
        
    <p class="p1">
    Address: New York, NY 10012, US 
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>  <br>
    Email address: coffeeanddessert@gmail.com 
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" 
    class="bi bi-envelope-fill" viewBox="0 0 16 16">
    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/></svg> <br>
    Telephone:  + 01 234 567 88   
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"  
    class="bi bi-telephone-fill" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/></svg> 
             </p>
          </div>
        </div>
      </div> 
    </section>
  </center>
      
  <!-- Message -->
  <center>
  <form method="post">
    <div class="mb-8"> 
    <label for="exampleFormControlInput1" class="form-label"> Title </label>
     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your message's title." name="title">
      </div>
      <br>
        <div class="mb-9">
    <label for="exampleFormControlTextarea1" class="form-label"> Message </label>
      <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Write a message." rows="3" name="message"></textarea>
      </div>
      <br>
      <div class="send">
        <input type="submit" class="btn" name="send" value="Send"> 
      </div>
      </form>
      </center> 
      <br>
      <br>
          
      <!-- Pictures -->
      <center>
          <section id="contact">
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <img src="images/coffee20.jpeg" class="img-fluid" alt="Responsive image">
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <img src="images/coffeemachine.jpeg" class="img-fluid" alt="Responsive image">
           </div> 
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
               <img src="images/milkshake.jpg" class="img-fluid" alt="Responsive image">
               </div>
             </div>
            </section>
         </center>
      
   <!-- Map -->
   <center>
     <section id="contact" class="py-5"> 
     <h1 class="h2"> Our Location
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" 
      class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
     <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg>
     </h1>
     <br>
     <div class="row"> 
     <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=new york &amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.embedmymap.com/">Embed My Map</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
     </div>     
    </section>
   </center>

  <!-- Footer -->
  <footer class="page-footer font-small black darken-3">

  <div style="background-color: black;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">
      </div>
    </div>
  </div>

  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
       <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold"> Company name</h6>
        <hr class="grey accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 75px;">
        <p class="pfooter"> Coffee & Dessert </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold"> Links </h6>
        <hr class="grey accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 47px;">
         <p class="pfooter">
         <a href="index.php"> HOME </a><br>
         <a href="aboutus.php"> ABOUT US </a><br>
         <a href="menu.php"> MENU </a><br>
         <a href="reservation.php"> RESERVATION </a><br>
         <a href="contact.php"> CONTACT </a><br>
         <a href="login.php"> LOG IN </a><br>
         <a href="signup.php"> SIGN UP </a>
        </p>
      </div>

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

       <!-- Opening hours -->
      <h6 class="text-uppercase font-weight-bold"> Opening hours </h6>
      <hr class="grey accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">
            <p class="pfooter2"> MONDAY - 8am - 5pm </p>
            <p class="pfooter2"> TUESDAY - 8am - 5pm </p>
            <p class="pfooter2"> WEDNESDAY - 8am - 5pm </p>
            <p class="pfooter2"> THURSDAY- 8am - 5pm </p>
            <p class="pfooter2"> FRIDAY - 8am - 5pm </p>
            <p class="pfooter2"> SATURDAY - 8am - 5pm </p>
            <p class="pfooter2"> SUNDAY - closed </p>
      </div>

      <!-- Grid column -->
       <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="grey accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 57px;">
        <p class="pfooter">
          <i class="fas fa-home mr-3"></i> New York, NY 10012, US<br>
          <i class="fas fa-envelope mr-3"></i> coffeeanddessert@gmail.com<br>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88
          </p>
        </div>
    </div>
  </div>

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

            <!-- Facebook -->
          <a class="fb-ic">
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i></a>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i></a>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <a href="https://www.google.com/" target="_blank"><i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i></a>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i></a>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i></a>
          </a>
        </div>
      </div>
    </div>
  </div>
      
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="index.php"> Coffee & Dessert </a>
   </div>
 </footer>
      
  <?php
     $conn=mysqli_connect("localhost","root","","coffeeanddessert");
     mysqli_select_db($conn,'coffeeanddessert');
                
    $email = $_SESSION['email'];
    $errors = array();
        
    if(isset($_POST['send'])){  
      
        $title = mysqli_real_escape_string($conn,$_POST['title']);
        $message = mysqli_real_escape_string($conn,$_POST['message']);
    
        if (empty($title)){
            array_push($errors, "Title is required"); 
        }
        
        
        if (empty($message)){ 
            array_push($errors, "Message is required"); 
        }
        
        $query = "SELECT * FROM inbox WHERE title='$title' OR message='$message' LIMIT 1";
            
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
        // if user exists
        if ($user)
        { 
            
            if ($user['message'] === $message) 
            {
                array_push($errors, "The message has been sent successfully!");
            }
        }
        
            if (count($errors) == 0){
           
              $regist ="INSERT INTO inbox (email, title, message)
              VALUES ('$email', '$title','$message')";
                
               $rows = "SELECT * FROM inbox WHERE email='$email' AND message='$message'";
	
               $run = mysqli_query($conn, $rows);
	
             if(mysqli_num_rows($run)<10){
                   
                 mysqli_query($conn,$regist);
            
                 echo "<script>alert('The message has been sent successfully!');</script>";
    
               }
          }
    }
?>
    <!-- javascript -->
    <script src="javascript/index.js"></script>
    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>