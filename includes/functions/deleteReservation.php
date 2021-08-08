<?php

$con=mysqli_connect("localhost","root","","coffeeanddessert");
mysqli_select_db($con,"coffeeanddessert");

if(isset($_GET['delete'])){
	
	$delete = $_GET['delete'];
	
	$delete_query = "DELETE from rezervimi where re_id='$delete'";
	
	if(mysqli_query($con, $delete_query)){
	
	echo "<script>alert('The reservation has been deleted!')</script>";
	echo "<script> window.open('../../tabelaerezervimit.php','_self')</script>";
	
	 }
  }
?>