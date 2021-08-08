<?php

//startimi i sesionit
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title> About Us </title>
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
    <link rel="stylesheet" type="text/css" href="style/aboutus.css">
</head>  
    
  <!-- Navigation bar -->
  <body>
  <?php include "Includes/template/nav.php";?>
      
      <!-- Text -->
      <p id="txt"> 
          <br>
          <br>
          <br>
          <br>
          <br>
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/> 
          <br>
          <br>
          <br>
          <br>
          <br>
          </p>
          <br>
            
      <center>
      <p class="aboutus"> About Us </p>
      </center>
       
      <br>
      <p id="txt2">
  Our company is called 'Coffee and Dessert', which is built since 2018. <br> 
  We are so happy to introduce our coffee shop in New York. <br>
  We have a good group of workers, which we already have 50 employees. <br>
  We have an extensive menu where you can find different types of coffees and desserts. <br>
  Customers of all ages appreciate the quality of our premium coffee. <br>
  We work 6 days a week. <br>
  Coffee shops like these are the perfect places to be productive, <br>
  hang out with your friends or family or just get some personal time away from the distractions of school. <br>
  Our company is always at your service!
      </p>
      <br>
      
   <!-- Images -->
    <center>
    <img src="images/doughnut.jpg" class="img-fluid" alt="Responsive image">
    <img src="images/coffee31.jpg" class="img-fluid" alt="Responsive image">
    <img src="images/machine.jpg" class="img-fluid" alt="Responsive image">
    <img src="images/desserts.jpg" class="img-fluid" alt="Responsive image"> 
    </center>
    <br> 
    <br>
        <?php include "xml.php";?> <!-- XML -->
      <br>
      <br>
      
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
            <p class="pfooter2"> THURSDAY - 8am - 5pm </p>
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
      
    <!-- javascript -->
    <script src="javascript/index.js"></script>
    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>