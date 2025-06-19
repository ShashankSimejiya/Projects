<?php
	$id=$_GET['id'];
	$cn=mysqli_connect("localhost","root","","jewellery");
	$q=mysqli_query($cn,"delete from contactus where id='$id'");
	echo"<script>window.location='contectus.php'</script>";
?>
<?php
	include("footer.php");
?>