<?php

require "includes/functions/connect.php";

    $data = $_POST['data'];
    $ora = $_POST['ora'];
    $emri = $_POST['emri'];
    $telefoni = $_POST['telefoni'];
    $email = $_POST['email'];
    $nripersonave = $_POST['nripersonave'];

  //Kjo pjese na nevojitet te shikojme nese ekziston perdoruesi me email te njejte
  $queryEmail = mysqli_query($connect, "SELECT email FROM rezervimi WHERE email='$email'");
  $countEmail = @mysqli_num_rows($queryEmail);

  $send = true;

    //errori i pergjithshem
    if(empty($data) && empty($ora) && empty($emri) && empty($telefoni) && empty($email) && empty($nripersonave)){
	$errorGen = "Te gjitha fushat duhet te plotesohen!";
	$send = false;
   }

   else {
      //nese fusha e emrit eshte e zbrazet
	  if(empty($emri)){
		$errorEmri = "Fusha e emrit duhet te plotesohet!";
		$send = false;
	}

	 else {
		//nese emri permban edhe karaktere tjera jo-shkronje
		if(!preg_match("/^[a-zA-Z ]*$/", $emri)){
			$errorEmri = "Emri duhet te permbaje vetem shkronja!";
			$send = false;
		}
	}

    //nese fusha e dates eshte e zbrazet
	if(empty($data)){
		$errorData = "Fusha e dates duhet te plotesohet!";
		$send = false;
	}
   
  //nese fusha e ores eshte e zbrazet
	if(empty($ora)){
		$errorOra = "Fusha e ores duhet te plotesohet!";
		$send = false;
	}
    
	//nese fusha e email adreses eshte e zbrazet
	if(empty($email)) {
		$errorEmail = "Fusha e email adreses duhet te plotesohet!";
		$send = false;
	}

	//nese perdoruesi nuk ekziston
    else {
		$query1 = "SELECT * FROM rezervimi WHERE email = '$email';";
		$query1Res = mysqli_query($connect, $query1);
		$count1 = mysqli_num_rows($query1Res);
	}

    if(empty($telefoni)){
		$errorTelefoni = "Fusha e telefonit duhet te plotesohet!";
		$send = false;
	}
	
        if(empty($nripersonave)){
		$errorNriPersonave = "Fusha e numrit te personave duhet te plotesohet!";
		$send = false;
	}

    if($send == true){

		//tani jemi gati te insertojme perdoruesin e ri ne db
		//ne rastin tone do te bejme nje insertim
		$querysql = "INSERT INTO rezervimi
			(data, ora, emri, telefoni, email, nripersonave)
			VALUES ('$data', '$ora', '$emri', '$telefoni', '$email', '$nripersonave');";

		//funksioni ne vazhdim perdoret per te ekzekutuar deklarata te shumta te sql query ne mysql
		if (mysqli_multi_query($connect, $querysql)){
            echo '<script type="text/javascript">';
            echo 'alert("Reservation is completed successfully!")';  
            echo '</script>';
		 }
      }
   }
?>