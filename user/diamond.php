<?php

	include("../connect.php");
?>

<a href="jewellery.php">BACK TO Jewellery</a>

<center><h2>Diamond Items</h2></center>

<center><table cellpadding="10" border="2"  cellspacing="2" >
	<tr>
		<th>Name</th>
		<th>Photo</th>
		<th>Type</th>
		<th>Caret</th>
		<th>Gweight</th>
		<th>Nweight</th>
		<th>Price</th>
		<th>Quantity</th>
		<th></th>
	</tr>
<?php
	$q = mysqli_query($cn,"select * from jewellery where type='DIAMOND'");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>
			<th>".$r[1]."</th>
			<th><img src='../image/".$r[2]."' height=100 width=100></th>
			<th>".$r[3]."</th>
			<th>".$r[4]."</th>
			<th>".$r[5]."</th>
			<th>".$r[6]."</th>
			<th>".$r[7]."</th>
			<th><input type='number' name='qt' size=3 min=1></th>;
			<th><a href='cart.php'><button>Add to CART</button></a></th>
		</tr>";
	}
?>
</table></center>