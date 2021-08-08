<?php

$con=mysqli_connect("localhost","root","","coffeeanddessert");
mysqli_select_db($con,"coffeeanddessert");
error_reporting();
if(isset($_POST['update'])){
    $re_id1=$_POST['re_id'];
	$data1 = $_POST['data'];
	$ora1 = $_POST['ora'];
	$emri1 = $_POST['emri'];
	$telefoni1 = $_POST['telefoni'];
    $email1 = $_POST['email'];
    $nripersonave1 = $_POST['nripersonave'];

	if($data1!='' or $ora1!='' or $emri1!=''){

		$update_query="UPDATE rezervimi SET data='$data1', ora='$ora1', emri='$emri1', telefoni='$telefoni1', nripersonave='$nripersonave1', email='$email1'
        WHERE
        re_id='$re_id1'";
		
		if(mysqli_query($con, $update_query)){
		
			echo "<script>alert('The reservation has been updated!')</script>";
//			header("location: .../tabelaerezervimit.php");
            echo "<script> window.open ('../../tabelaerezervimit.php','_self');</script>";
		}
	}

   else{	
		echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
		exit();
	   }
	}

?>