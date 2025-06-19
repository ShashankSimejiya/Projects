<?php

	include("connect.php");
?>

<a href="jewellery.php">BACK TO Jewellery</a>

<center><h1>Diamond Items</h1></center>

<center><table cellpadding="10" border="2" bordercolor="red" cellspacing="4"  width=100%>
	<tr>
		<th>Name</th>
		<th>Photo</th>
		<th>Type</th>
		<th>Caret</th>
		<th>Gross Weight</th>
		<th>Net Weight</th>
		<th>Price</th>
		<th></th>
	</tr>
<?php
	$q = mysqli_query($cn,"select * from jewellery where type='DIAMOND'");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>
			<th>".$r[1]."</th>
			<th><img src='image/".$r[2]."' width=250 height=150></th>
			<th>".$r[3]."</th>
			<th>".$r[4]."</th>
			<th>".$r[5]."</th>
			<th>".$r[6]."</th>
			<th>".$r[7]."</th>
			<th><a href='login.php'><button>Order Now</button></a></th>
		</tr>";
	}
?>
</table></center>