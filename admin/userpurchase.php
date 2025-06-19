<?php
	include("header.php");
?>
<html>
	<head>
		<h1 align="center"> Purchase </h1>
	</head>
</html>

<center><table cellpadding="10" border="2"  cellspacing="2" bordercolor="red" width=100% >	
	<tr>	
		<th align=center><b>Id</th>
		<th align=center><b>User Name</th>
		<th align=center><b>Product Name</th>
		<th align=center><b>Product Image</th>
		<th align=center><b>Product Type</th>
		<th align=center><b>Caret</th>
		<th align=center><b>Product Gross Weight</th>
		<th align=center><b>Product Net Weight</th>
		<th align=center><b>Price</th>
		<th align=center><b>Quentity</th>
		<th align=center><b>Amount</th>
		<th align=center><b>Status</th>
		<th align=center><b></th>
	</tr>
<?php
	$cn=mysqli_connect("localhost","root","","jewellery");
	
	$q = mysqli_query($cn,"select * from cart");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>";
		echo "<td>".$r[0]."</td>";
		echo "<td>".$r[1]."</td>";
		echo "<td>".$r[2]."</td>";
		echo "<td>".$r[3]."</td>";
		echo "<td>".$r[4]."</td>";
		echo "<td>".$r[5]."</td>";
		echo "<td>".$r[6]."</td>";
		echo "<td>".$r[7]."</td>";
		echo "<td>".$r[8]."</td>";
		echo "<td>".$r[9]."</td>";
		echo "<td>".$r[10]."</td>";
		echo "<td>".$r[11]."</td>";
		echo "<td><a href='deletepurchase.php?id=".$r[0]."'>DELETE</a></td>";

		echo "</tr>";	
	}
?>
<?php 
	include("footer.php");
?>   


	