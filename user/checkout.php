<?php
	include("../connect.php");

	$uname=$_GET['u'];
	$q1=mysqli_query($cn, "select * from cart where unm='$uname' and stat='panding'");
	$s=mysqli_query($cn, "select sum(amt) as tot from cart where unm='$uname' and stat='panding'");
	$t=mysqli_fetch_array($s);
	$tot=$t['tot'];
	$upd=mysqli_query($cn,"update cart set stat='confirm' where unm='$uname'");

	echo "<script>";
		echo "alert('Thanks for shopping with us..... Order Deliver In 24 Hours In Your Address .....');";
	echo "</script>";
	
	echo "Thanks for shopping with us.....<br>Order Deliver In 24 Hours In Your Address .....";
	
	echo "<script>window.location='index.php'</script> ";
?>
