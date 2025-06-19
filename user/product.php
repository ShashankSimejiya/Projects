<?php

	include("../connect.php");
	session_start();
	if(!isset($_SESSION['user']))
	{
		header("location:../login.php");
	}

	$uname=$_SESSION['user'];
?>

<a href="jewellery.php">BACK TO Jewellery</a>

<center><h1><?php echo $_GET['cat'];?> ITEMS</h1></center>
	<center><table cellpadding="10" border="2"  cellspacing="2" bordercolor="#e5bb61" width=100% >
	<tr>
		<th>Name</th>
		<th>Photo</th>
		<th>Type</th>
		<th>Caret</th>
		<th>Gross Weight</th>
		<th>Net Weight</th>
		<th>Price</th>
		<th>Quantity</th>
	</tr>
<?php
	$c=$_GET['cat'];	
	$q = mysqli_query($cn,"select * from jewellery where type='$c'");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr><form method='POST' action='cart.php'>";
			echo "<input type='hidden' name='id' value='".$r[0]."'>";
			echo "<input type='hidden' name='unm' value='".$uname."'>";
			echo "<th><input type='hidden' name='r1' value='".$r[1]."'>".$r[1]."</th>";
			echo "<th><input type='hidden' name='r2' value='".$r[2]."'><img src='../image/".$r[2]."' width=200 height=100></th>";
			echo "<th><input type='hidden' name='r3' value='".$r[3]."'>".$r[3]."</th>";
			echo "<th><input type='hidden' name='r4' value='".$r[4]."'>".$r[4]."</th>";
			echo "<th><input type='hidden' name='r5' value='".$r[5]."'>".$r[5]."</th>";
			echo "<th><input type='hidden' name='r6' value='".$r[6]."'>".$r[6]."</th>";
			echo "<th><input type='hidden' name='r7' value='".$r[7]."'>".$r[7]."</th>";
			echo "<th><input type='number' name='qt' size=3 min=1 required></th>";
			echo "<th><input type='submit' name='submit' value='Add To Cart'></form></th></tr>";
	}
?>
</table></center>