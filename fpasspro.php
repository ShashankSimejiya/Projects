<table align="center">
	<tr bgcolor=#e5bb61>
		<th>
			<?php
				include("header.php");
			?>
		</th>
	</tr>

<html>
<body>
<center>
	<form method="POST" action="fpasspro.php" name="f1">

<?php

    $cn = mysqli_connect("localhost","root","","jewellery");

    $unm = $_POST['unm'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = mysqli_query($cn,"select * from signup where username='$unm' and email='$email' ");
	if(mysqli_num_rows($q)==0)
	{
		echo "<script>alert('Username or Email could not match...');</script>";
		echo "<script>window.location='fpass.php?unm=".$unm."'</script>";
	}
	else
	{
		$qu=mysqli_query($cn,"update signup set password='$password' where username='$unm' and email='$email'");
		echo "<script>alert('Password update Successfully...');</script>";
		echo "<script>window.location='login.php'</script>";
	}
	
?>
