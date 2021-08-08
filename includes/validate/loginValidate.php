<?php

 //konektimi me db
 require "includes/functions/connect.php";

 //validimi i te dhenave te formes se kycjes

 //marrja e te dhenave te formes permes metodes POST
 $email = $_POST['email'];
 $password = $_POST['password'];

 $login = true;

    //validimi i te dhenave hyrese
    //nese asnjera nga fushat nuk eshte plotesuar
    if(empty($email) && empty($password)){
	$errorGen = "Te gjitha fushat duhet te plotesohen!";
	$login = false;
    }

    else {
	//validimi i email-it
	//nese emaili eshte i zbrazet
	if(empty($email)){
		$errorEmail = "Fusha e email-it duhet te plotesohet!";
		$login = false;
	}
        
    //nese perdoruesi nuk ekziston
	else {
		$query1 = "SELECT * FROM perdoruesi WHERE email = '$email';";
		$query1Res = mysqli_query($connect, $query1);
		$count1 = mysqli_num_rows($query1Res);

		//nese nuk ka rreshta rezultat => perdoruesi nuk ekziston
		if($count1 == 0){
			$errorEmail = "Ky perdorues nuk ekziston!";
			$login = false;
		}
	}

	//nese fjalekalimi eshte i zbrazet
	if(empty($password)){
		$errorPassword = "Fusha e fjalekalimit duhet te plotesohet!";
		$login = false;
	}
    //nese fjalekalimi per kete perdorues nuk eshte i sakte
	else {
		$query2 = "SELECT password FROM perdoruesi WHERE email = '$email';";
		$query2Res = mysqli_query($connect, $query2);
		$query2Row = mysqli_fetch_array($query2Res);
		$passwordDB = $query2Row['password'];

		//nese vlerat e fjalekalimeve nuk perputhen
		if($passwordDB != $password){
			$errorPassword = "Fjalekalimi nuk eshte i sakte!";
			$login = false;
		}
	}

	   //nese asnje gabim nuk ka ndodhur, atehere asnjehere nuk eshte plotesuar asnje kusht qe perfaqeson   nje gabim te ndodhur => variabla log in ende e permban vleren fillestare true
	    if($login == true) {
		//perdoruesi kycet ne sistem, varesisht prej rolit te tij

		$query3 = "SELECT roli FROM perdoruesi WHERE email = '$email';";
		$query3Res = mysqli_query($connect, $query3);
		$query3Row = mysqli_fetch_array($query3Res);
		$roli = $query3Row['roli'];

		$_SESSION['email'] = $email;
		$_SESSION['roli'] = $roli;

		//ridrejtoje ne faqen baze e cila mund te qaset pas kycjes
		header("Location: index.php");
	  }
   }
?>