  <div class="topnav" id="myTopnav">
        <a href="index.php"> HOME </a>
        <a href="aboutus.php"> ABOUT US </a>
        <a href="menu.php"> MENU </a>

	<?php
		//nese perdoruesi nuk eshte kycur ne sistem
		if(!isset($_SESSION['email'])){
			echo '<a href="login.php"> LOG IN </a>
                  <a href="signup.php"> SIGN UP </a>';
		}

		//nese perdoruesi eshte kycur ne sistem
		else {
			if(isset($_SESSION['roli'])){
				//administrator
				if($_SESSION['roli'] == 1){
                    echo '<a href="tabelaerezervimit.php"> RESERVATION </a>
						  <a href="contact.php"> CONTACT US </a>';
				}

				//klient
				else if($_SESSION['roli'] == 2){
                    echo '<a href="reservation.php"> RESERVATION </a>
						  <a href="contact.php"> CONTACT US </a>';
				}

				//punetor
				else if($_SESSION['roli'] == 3){
                    echo '<a href="reservationPunetori.php"> RESERVATION </a>';
                       
				}
			}

			echo '<a href = "includes/validate/logout.php"> LOG OUT </a>';
		}
	?>
  </div>