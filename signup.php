<?php //startimi i sesionit
session_start();

//nese perdoruesi nuk eshte kycur, atehere paraqitja kete pamje te kesaj web faqeje
if(!isset($_SESSION['email'])){

?>
<!DOCTYPE html>
<html>
<head>
<title> Sign Up </title>
<meta charset="UTF-8">
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
    <link rel="stylesheet" type="text/css" href="style/signup.css">
</head>     
    
  <body>
    <?php include "Includes/template/nav.php";?>        
          
    <br>
      
      <!-- Sign up -->
      <div class="header">
        <h2> Sign Up </h2>
      </div>
      <?php
            $errorGen = $errorName = $errorSurname = $errorEmail = $errorPassword1 = $errorPassword2 = $errorPassTooltip= "";
            $username = $surname = $email = $password_1 = $password_2 ="";

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //POST

            include 'server.php';
            }
      ?>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">     
           <div class="input-group">
                <label class="labels"> Name </label>
                <input type="text" name="name" value="<?php echo $username; ?>">
          </div>  
                <?php echo "<span class='error'>$errorName<span>";?>
           <div class="input-group">
                <label class="labels"> Surname </label>
                <input type="text" name="surname" value="<?php echo $surname; ?>">
          </div>  
                <?php echo "<span class='error'>$errorSurname<span>";?>          
            <div class="input-group">
                <label class="labels"> Email </label>
                <input type="text" name="email" value="<?php echo $email; ?>">
          </div> 
                <?php echo "<span class='error'>$errorEmail<span>";?>
            <div class="input-group">
                <label class="labels"> Password </label>
                <input type="password" name="password_1" value="<?php echo $password_1; ?>">
          </div>  
                <?php echo "<span class='error'>$errorPassword1<span>";
                echo "<br><span class='error'>$errorPassTooltip<span>";?>
          <div class="input-group">
                <label class="confirm"> Confirm password </label>
                <input type="password" name="password_2" value="<?php echo $password_2; ?>">
          </div>  
                <?php echo "<span class='error'>$errorPassword2<span>";?>
                <?php echo "<span class='error'>$errorGen<span>";?>
          <div class="input-group">
                 <input type="submit" name="signup" class="btn" value="Sign Up">
          </div>
            <center>
                <p class="member"> Already a member? <br>
                <a href="login.php"> Log in </a></p>
            </center>
         </form>
       </div>   
      </div>      
     <br>
      
    <!-- Footer -->
    <?php include "includes/template/footer.php";?>     
    <!-- javascript -->
    <script src="javascript/index.js"></script>
    <!-- bootstrap js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
<?php
}

else {
	//nese perdoruesi eshte i kycur, atehere ridrejtoje ne faqen baze pas kycjes
	header("Location: index.php");
}
?>