<?php
    
	include("../connect.php");
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("location:../login.php");
	}
?>
<head>
	<style>.s1{margin-right:15px;}</style>
</head>
<div>
	<a href="index.php"><img src="../img/ec0.jpg" height="200px" width="1520px">
</div>

<b class=s1><a href="index.php">HOME</a></b>
<b class=s1><a href="jewellery.php">JEWELLERY</a></b>
<b class=s1><a href="feedback.php">FEEDBACK</a></b>
<b class=s1><a href="carrier.php">CARRIER</a></b>
<b class=s1><a href="contectus.php">CONTECT US</a></b>
<div style=float:right>
<b class=s1><a href="userpurchase.php">PURCHASE</a></b>
<b class=s1><a href="sign up.php">USER</a></b>
<b class=s1><a href="logout.php">LOGOUT</a></b>

</div>
</div>