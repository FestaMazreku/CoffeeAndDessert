<?php 
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title> Reservation </title>
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
    <link rel="stylesheet" type="text/css" href="style/adminReservation.css">
    <!-- w3 schools -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!-- Footer -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>  
    
  <!-- Navigation bar -->
  <body>
   <?php include "Includes/template/nav.php";?>
    
   <!-- Tabela -->
     <table class="table">
        <thead class="thead-dark">
        <tr>
         <th scope="col" style="font-size: 17px; color: #C19A6B; font-weight: bold">Date</th>
        <th scope="col" style="font-size: 17px; color: #C19A6B; font-weight: bold">Time</th>
       <th scope="col" style="font-size: 17px; color: #C19A6B; font-weight: bold">Name & Surname</th>
      <th scope="col" style="font-size: 17px; color: #C19A6B; font-weight: bold">Telephone number</th>
       <th scope="col" style="font-size: 17px; color: #C19A6B; font-weight: bold">Email</th>
         <th scope="col" style="font-size: 17px; color: #C19A6B; font-weight: bold">Number of persons</th>
       </tr>
     </thead>
    
  <!--php-->
  <tbody>
      <?php 
      $con=mysqli_connect("localhost","root","","coffeeanddessert");
      mysqli_select_db($con,"coffeeanddessert");

      $query = "select * from rezervimi order by 1 DESC";

      $run = mysqli_query($con, $query);

      while($row=mysqli_fetch_array($run)){
	
	   $re_id = $row['re_id'];
	   $data = $row['data'];
	   $ora = $row['ora'];
	   $emri = $row['emri'];
	   $telefoni = $row['telefoni'];
       $email = $row['email'];
       $nripersonave = $row['nripersonave'];
    ?> 
      <tr>
      <th scope="row"><?php  echo $data ?></th>
      <td><?php  echo $ora ?></td>
      <td><?php  echo $emri ?> </td>
      <td> <?php  echo $telefoni ?></td>
      <td> <?php  echo $email ?></td>
      <td> <?php  echo $nripersonave ?></td>
          
      <td><a href="includes/functions/deleteReservation.php?delete=<?php echo $re_id; ?>">Delete</a></td> 
      <td><a href="includes/functions/editReservation.php?edit=<?php echo $re_id; ?>">Update/Insert</a></td>
      </tr>
      <?php  } ?>
   </tbody>
</table>
      
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
         <a href="tabelaerezervimit.php"> RESERVATION </a><br>
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