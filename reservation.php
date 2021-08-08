<?php 
require "includes/functions/connect.php";
//startimi i sesionit
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
				<td width="30%">data</td>
				<td width="70%">'.$_POST["data"].'</td>
			</tr>
			
			<tr>
				<td width="30%">ora</td>
				<td width="70%">'.$_POST["ora"].'</td>
			</tr>
            
            <tr>
				<td width="30%">emri</td>
				<td width="70%">'.$_POST["emri"].'</td>
			</tr>
            
            <tr>
				<td width="30%">telefoni</td>
                <td width="70%">'.$_POST["telefoni"].'</td>    
            </tr>
            
			<tr>
				<td width="30%">email</td>
				<td width="70%">'.$_POST["email"].'</td>
			</tr>
            
            <tr>
				<td width="30%">nripersonave</td>
				<td width="70%">'.$_POST["nripersonave"].'</td>
			</tr>
			
		</table>
	 ';
    }
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
    <!-- w3 schools -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!-- Footer -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="style/reservation.css">
</head>  
     
   <!-- Navigation bar -->
   <body>
   <?php include "Includes/template/nav.php";?>
    
    <!-- Reservation -->
    <section class = "banner">
    <h2 class="h2"> RESERVATION </h2>
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#242124" 
    class="bi bi-journal-bookmark" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"/>
    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/></svg>
           
   <?php
        $errorGen = $errorData = $errorOra = $errorEmri = $errorTelefoni = $errorEmail = $errorNriPersonave= "";
        $data = $ora = $emri = $telefoni = $email = $nripersonave ="";

        //kushti if ne kete rast do te plotesohet vetem pasi klikohet butoni Submit ne formen
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //POST

         include 'reservationsdb.php';
         }  
    ?>
         <br>
         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
           <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">     
          <div class="input-group">
               <label class="labels"> Date </label>
               <input type="date" name="data" value="<?php echo $data; ?>">
          </div>  
                <?php echo "<span class='error'>$errorData<span>";?>
           <div class="input-group">
                <label class="labels"> Time </label><br>
                <input type="time" name="ora" value="<?php echo $ora; ?>">
          </div>  
                <?php echo "<span class='error'>$errorOra<span>";?>   
           <div class="input-group">
                <label class="labels"> Name & Surname </label>
                <input type="text" name="emri" value="<?php echo $emri; ?>">
          </div>  
                <?php echo "<span class='error'>$errorEmri<span>";?>
           <div class="input-group">
                <label class="labels"> Telephone number </label>
                <input type="tel" name="telefoni" value="<?php echo $telefoni; ?>">
          </div>  
                <?php echo "<span class='error'>$errorTelefoni<span>";?>          
            <div class="input-group">
                <label class="labels"> Email </label>
                <input type="text" name="email" value="<?php echo $email; ?>">
          </div> 
                <?php echo "<span class='error'>$errorEmail<span>";?>
            <div class="input-group">
                 <label class="labels"> How many people? </label>
                 <input type="number" name="nripersonave" value="<?php echo $nripersonave;?>">
            </div>
                <?php echo "<span class='error'>$errorNriPersonave<span>";?>
                <center>
             <div class="input-group">
                 <input type="submit" style= "padding: 3px; background: black; opacity: 0.7; color: white; font-weight: bold; border: 2px; border-radius: 1px; font-size: 20px; width: 70%" name="send" value="Book your table">
                 <?php echo "<span class='error'>$errorGen<span>";?>
                   </div>
                </center>
              </form>
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
          
    <?php
       $conn=mysqli_connect("localhost","root","","coffeeanddessert");
        mysqli_select_db($conn,'coffeeanddessert');
                
        $email = $_SESSION['email'];
        $errors = array();
        
        if(isset($_POST['send'])){
           
        $data=mysqli_real_escape_string($conn,$_POST['data']);
        $ora = mysqli_real_escape_string($conn,$_POST['ora']);
        $emri = mysqli_real_escape_string($conn,$_POST['emri']);
        $telefoni = mysqli_real_escape_string($conn,$_POST['telefoni']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $nripersonave = mysqli_real_escape_string($conn,$_POST['nripersonave']);
    
        if (empty($data)){
            array_push($errors, "Data is required"); 
        }
        
        if (empty($ora)){ 
            array_push($errors, "ora is required"); 
        }
    
        $query = "SELECT * FROM rezervimi WHERE data='$data' OR ora='$ora' LIMIT 1";
            
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
        // if user exists
        if ($user) 
          { 
            if ($user['data'] === $data) 
            {
                array_push($errors, "data already exists");
            }
            
            if ($user['ora'] === $ora) 
            {
                array_push($errors, "ora already exists");
            }
          }
        if (count($errors) == 0){
  	     
             $regist ="INSERT INTO rezervimi (data,ora,emri,telefoni,email,nripersonave)
              VALUES ('$data','$ora','$emri','$telefoni','$email','$nripersonave')";
              
            $rows = "SELECT * FROM rezervimi WHERE data='$data' AND ora='$ora'";
	
           $run = mysqli_query($conn, $rows);
	
	           if(mysqli_num_rows($run)<10){
                   
                    mysqli_query($conn,$regist);
            
                    echo "<script>alert('Reservation is completed successfully!');</script>";
    
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