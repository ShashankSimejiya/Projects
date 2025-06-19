<?php
	$id=$_GET['id'];

	$cn=mysqli_connect("localhost","root","","jewellery");

	$q=mysqli_query($cn,"delete from cart where id='$id'");

	echo"<script>window.location='jewellery.php'</script>";
?>
<?php
	include("footer.php");
?>