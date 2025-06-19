<?php
	$id=$_GET['id'];
	$cn=mysqli_connect("localhost","root","","jewellery");
	$q=mysqli_query($cn,"delete from carrier where id='$id'");
	echo"<script>window.location='carrier.php'</script>";
?>
<?php
	include("footer.php");
?>