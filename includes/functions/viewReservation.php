<?php 
session_start();

//nese perdoruesi nuk eshte kycur, atehere paraqitja kete pamje te kesaj web faqeje
if(!isset($_SESSION['email'])) {
else{
    
?>
<html>
<body>

<table width="1000" border="5" align="center" bgcolor="pink">
	
<?php 
      $con=mysqli_connect("localhost","root","","coffeeanddessert");
      mysqli_select_db($con,"coffeeanddessert");

      $query = "SELECT * from rezervimi order by 1 DESC";

      $run = mysqli_query($con, $query);

    while($row=mysqli_fetch_array($run)){
	$re_id =$_POST['re_id']
    $data = $_POST['data'];
    $ora = $_POST['ora'];
    $emri = $_POST['emri'];
    $telefoni = $_POST['telefoni'];
    $email = $_POST['email'];
    $nripersonave = $_POST['nripersonave'];

    ?> 
	<tr align="center">
        <td><?php echo $re_id; ?></td>
		<td><?php echo $data; ?></td>
		<td><?php echo $ora; ?></td>
		<td><?php echo $emri; ?></td>
        <td><?php echo $telefoni; ?></td>
		<td><?php echo $email; ?></td>
        <td><?php echo $nripersonave; ?></td>
        
		<td><?php echo $nripersonave; ?></td>
		<td><a href="admin/deleteReservation.php?delete=<?php echo $re_id; ?>"
		>Fshij</a></td>
		<td><a href="admin/editReservation.php?edit=<?php echo $re_id; ?>"
		>Ndrysho</a></td>
	</tr>
<?php } ?>
	
</table>
</body>
</html>

<?php } ?>