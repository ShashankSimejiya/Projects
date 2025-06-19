<?php
	$id=$_GET['id'];
	$cn=mysqli_connect("localhost","root","","jewellery");
	$q=mysqli_query($cn,"delete from signup where id='$id'");
	echo"<script>window.location='sign up.php'</script>";
?>
<?php
	include("footer.php");
?>