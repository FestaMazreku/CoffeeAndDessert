<?php 

$con=mysqli_connect("localhost","root","","coffeeanddessert");
mysqli_select_db($con,"coffeeanddessert");

if(isset($_GET['edit'])){
	
	$edit_id = $_GET['edit'];
	
	$edit_query = "SELECT * FROM rezervimi WHERE re_id='$edit_id'";
	
	$run_edit = mysqli_query($con, $edit_query);

?>

<html>
<body>
    
<?php
	while ($erow=mysqli_fetch_array($run_edit)){
?>
    
<form method="post" enctype="multipart/form-data" action="editReservation_by_id.php">

	<table width="600" bgcolor="#C19A6B" align="center" border="8">
		 
		 <tr>
			<td align="center" bgcolor="#5d432c" colspan="6">
			<h1>Update the reservation here</h1></td>
		 </tr>
		 <input type="hidden" name="re_id" size="30" value="<?php echo $erow['re_id']; ?>">
        
		 <tr>
			<td align="right">Date:</td>
			<td>
				<input type="date" name="data" size="30" value="<?php echo $erow['data']; ?>">
			</td>
		 </tr>
		 
		 <tr>
			<td align="right">Time:</td>
			<td>
				<input type="time" name="ora" size="30" value="<?php echo $erow['ora']; ?>">
			</td>
		 </tr>
		 
		 <tr>
			<td align="right">Name & Surname:</td>
			<td>
				<input type="text" name="emri" size="30" value="<?php echo $erow['emri'];?>">
			</td>
		 </tr>
		 
		 <tr>
			<td align="right">Telephone:</td>
			<td>
				<input type="tel" name="telefoni" value="<?php echo $erow['telefoni'];?>">
			</td>
		 </tr>
        
        <tr>
			<td align="right">Email:</td>
			<td>
				<input type="text" name="email" value="<?php echo $erow['email'];?>">
			</td>
		 </tr>
        
        <tr>
			<td align="right">Number of persons:</td>
			<td>
				<input type="number" name="nripersonave" value="<?php echo $erow['nripersonave'];?>">
			</td>
		 </tr>

     <div class="input-group">
        <tr>
           	<td align="center" colspan="6">
                 <input type="submit" style= "padding: 3px; background: black; opacity: 0.7; color: white; font-weight: bold; border: 2px; border-radius: 1px; font-size: 20px; width: 70%" name="update" value="Update now">
            </td>
		 </tr>
      </div>
        
<?php
}
?>
        
<?php
}
?>
	  </table>
    </form>
  </body>
</html>