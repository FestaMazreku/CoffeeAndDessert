<?php 
session_start();

//nese perdoruesi nuk eshte kycur, atehere paraqitja kete pamje te kesaj web faqeje
if(!isset($_SESSION['email'])) {

    else{
?>
<html>
	<head>
		<title>Insert a new reservation</title>
	</head>
<body>
<form method="post" action="editReservation_by_id.php" enctype="multipart/form-data">
	
	<table width="600" bgcolor="red" align="center" border="10">
		 
		 <tr>
			<td align="center" bgcolor="white" colspan="6">
			<h1>Shto nje termin te ri ketu</h1></td>
		 </tr>
		 
		 <tr>
			<td align="right">Date:</td>
			<td><input type="date" name="data" size="30"></td>
		 </tr>
		 
		 <tr>
			<td align="right">Time:</td>
			<td><input type="time" name="ora" size="30"></td>
		 </tr>
		 
		 <tr>
			<td align="right">Name & Surname:</td>
			<td><input type="text" name="emri" size="30"></td>
		 </tr>
		 
		 <tr>
			<td align="right">Telephone:</td>
			<td><input type="tel" name="telefoni"></td>
		 </tr>
        
        <tr>
			<td align="right">Email:</td>
			<td><input type="text" name="email"></td>
		 </tr>
		 
        <tr>
			<td align="right">Number of persons:</td>
			<td><input type="number" name="nripersonave"></td>
		 </tr>
		
		 <tr>
			<td align="center" colspan="6"><input type="submit" name="submit" 
			value="Shtoje tani"></td>
		 </tr>
	  </table>
    </form>
  </body>
</html>

<?php 
$con=mysqli_connect("localhost","root","","coffeeanddessert");
mysqli_select_db($con,"coffeeanddessert");

if(isset($_POST['submit'])){
	
       $data = $row['data'];
	   $ora = $row['ora'];
	   $emri = $row['emri'];
	   $telefoni = $row['telefoni'];
       $email = $row['email'];
       $nripersonave = $row['nripersonave'];
	
	if($data=='' or $ora=='' or $emri==''){
		
		echo "<script>alert('Ndonjera prej fushave eshte e zbrazet')</script>";
		
		exit();
	}
	else {
		
		$insert_query = "INSERT into rezervimi
        (data,ora,emri,telefoni,email,nripersonave) 
		VALUES ('$data','$ora','$emri',
		'$telefoni','$email','$nripersonave')";
		
		if(mysqli_query($con, $insert_query)){
			
		echo "<script>alert ('The reservation is completed successfully!')</script>";
		echo "<script>window.open('tabelaerezervimit.php','_self')</script>";
		
		}
	}	
}
?>
<?php } ?>