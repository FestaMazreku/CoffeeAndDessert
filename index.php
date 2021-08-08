<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title> Coffee & Dessert </title>
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
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <!-- w3 schools -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!-- Footer -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>  
    
  <!-- Navigation bar -->
  <body>
  <?php include "includes/template/nav.php";?>
        
      <!-- Header -->
      <header>
         <center>
     <div class="text-center banner">
      <h1 class="font-weight-bold title"> Coffee & Dessert 
       <svg xmlns="http://www.w3.org/2000/svg" 
        width="25" height="25"
        fill="burlywood"
        class="bi bi-cup-fill" 
        viewBox="0 0 16 16">
      <path d="M1 2a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v1h.5A1.5 1.5 0 0 1 16 4.5v7a1.5 1.5 0 0 1-1.5   1.5h-.55a2.5 2.5 0 0 1-2.45 2h-8A2.5 2.5 0 0 1 1 12.5V2zm13 10h.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5H14v8z"/></svg>
              </h1>
            </div>
        </center>
    </header>
        
         <!-- Opening Hours -->
         <section id="hours">
            <div class="border">
                <div style="border-style: dotted; border-width: 7px; border-color: whitesmoke">
                 <h1 class="h1"> Opening hours: </h1>
                 <p class="p"> ○ MONDAY ― 8 AM - 5 PM </p>
                 <p class="p"> ○ TUESDAY ― 8 AM - 5 PM </p>
                 <p class="p"> ○ WEDNESDAY ― 8 AM - 5 PM </p>
                 <p class="p"> ○ THURSDAY ― 8 AM - 5 PM </p>
                 <p class="p"> ○ FRIDAY ― 8 AM - 5 PM </p>
                 <p class="p"> ○ SATURDAY ― 8 AM - 5 PM </p>
                 <p class="p"> ○ SUNDAY ― closed </p>
                 </div>    
              </div>
          </section>
      
        <!-- About Us -->
        <section id="about" class="py-5"> 
          <div class="container">
          <div class="row">
          <div class="col-md-6 my-4"> 
          <h1 class="text-uppercase title-text display-4"> About Us </h1> 
          <p class="text"> Welcome! We are so excited to introduce our Coffee Shop & Bakery. We offer some of the best locally roasted coffee. Also available are our special Lattes, Frappes, Mochas, Cappuccinos and more... </p>
            <a href="aboutus.php" class="btn hvr-right my-4 text-capitalize"> Know more </a>
            </div>
              <div class="col-md-6 about-images my-4 d-none d-lg-block"> 
               <img src="images/coffee24.jpg" alt="image" class="img-1 img-thumbnail about-img"> 
               <img src="images/cupcake.jpg" alt="image" class="img-2 img-thumbnail about-img"> 
               <img src="images/coffee21.jpg" alt="image" class="img-3 img-thumbnail about-img"> 
               <img src="images/coffee10.jpg" alt="image" class="img-4 img-thumbnail about-img"> 
               <img src="images/coffee17.jpg" alt="image" class="img-5 img-thumbnail about-img"> 
             </div>
          </div>
        </div>
     </section>
     
    <!-- Menu -->
    <center>     
    <a href="menu.php"> 
    <h1 class="btn hvr-right my-4 text-capitalize"> MENU </h1> </a>
    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" fill="#634832" 
     class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/></svg>
    <div class="card-group">
    <div class="card">
    <img src="images/coffee4.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="p"> Coffees </h5>
     </div>
  </div>
         
  <div class="card">
    <img src="images/macaroons3.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="p"> Macaroons </h5>
    </div>
  </div>
         
  <div class="card">
    <img src="images/cupcakes.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="p"> Cupcakes </h5>
    </div>
  </div>
         
  <div class="card">
    <img src="images/doughnuts.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="p"> Doughnuts </h5>
    </div>
  </div>
         
  <div class="card">
    <img src="images/chocolatecake.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="p"> Chocolate Cake </h5>
    </div>
  </div>
         
  <div class="card">
    <img src="images/waffles.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="p"> Waffles </h5>
      </div>
     </div>
    </div>
 </center>
      <br>
    
        <!-- Video -->
        <section class="most-liked p-5">
         <div class="video-container">
          <video class="bg-video" autoplay muted loop> 
            <source src="images/video/Coffee.mp4" type="video/mp4"> 
            <source src="images/video/Coffee.webm"> 
             </video>       
            </div>
            
                 <!-- Offers -->
              <div class="container-fluid">
                <div class="row">
                  <div class="col text-center py-5">
                 <h1 class="text-uppercase text-color front-weight-bold"> Offers </h1> 
               </div> 
              </div> 
                <div class="row justify-content-around align-items-center">
                    <div class="col-xl-3 col-lg-4 col-sm rotate">
                    <div class="card text-center mb-3 coffee-card">
                        <div class="card-header">
                        <h4 class="font-weight-light title-text"> Caffe Latte </h4>
                        </div>
                        <div class="card-body">
                            <img src="images/coffee11.jpg" class="img-fluid rounded"> 
                          </div>
                        <div class="card-footer">
                          with Croissant
                        </div>
                        <div class="back">
                            <div class="back-content">
                            <h1 class="text-uppercase font-weight-light"> Only for </h1>
                            <h3 class="mb-3"> 12$ </h3>
                             <a href="menu.php" class="btn hvr-right my-4 text-capitalize"> Menu </a>
                              </div>
                           </div>
                        </div>
                    </div>
                     <div class="col-xl-3 col-lg-4 col-sm rotate">
                    <div class="card text-center mb-3 coffee-card">
                        <div class="card-header">
                        <h4 class="font-weight-light title-text"> Black coffee </h4>
                        </div>
                        <div class="card-body">
                            <img src="images/coffee14.jpg" class="img-fluid rounded"> 
                          </div>
                        <div class="card-footer">
                          with Tart
                        </div>
                        <div class="back">
                            <div class="back-content">
                            <h1 class="text-uppercase font-weight-light"> Only for </h1>
                            <h3 class="mb-3"> 13$ </h3>
                             <a href="menu.php" class="btn hvr-right my-4 text-capitalize"> Menu </a>
                              </div>
                           </div>
                        </div>
                    </div>
                     <div class="col-xl-3 col-lg-4 col-sm rotate">
                    <div class="card text-center mb-3 coffee-card">
                        <div class="card-header">
                        <h4 class="font-weight-light title-text"> Cappucchino </h4>
                        </div>
                        <div class="card-body">
                            <img src="images/coffee13.jpg" class="img-fluid rounded"> 
                          </div>
                        <div class="card-footer">
                          with Cake
                        </div>
                        <div class="back">
                            <div class="back-content">
                            <h1 class="text-uppercase font-weight-light"> Only for </h1>
                            <h3 class="mb-3"> 14$ </h3>
                             <a href="menu.php" class="btn hvr-right my-4 text-capitalize"> Menu </a>
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
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