<?php
	$id=$_GET['id'];
	$cn=mysqli_connect("localhost","root","","jewellery");
	$q=mysqli_query($cn,"delete from feedback where id='$id'");
	echo"<script>window.location='feedback.php'</script>";
?>
<?php
	include("footer.php");
?>