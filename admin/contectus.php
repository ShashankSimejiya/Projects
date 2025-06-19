<?php
	include("header.php");
?>
<html>
	<head>
		<h1 align="center"> Contact Us</h1>
	</head>
</html>
<center><table cellpadding="10" border="2"  cellspacing="2" bordercolor="red" width=100% >
	<tr>
		<th align=center>Id</th>
		<th align=center>Name</th>
		<th align=center>Mobile No</th>
		<th align=center>E-mail</th>
		<th align=center>Address</th>
		<th align=center></th>
	</tr>
<?php
	$cn=mysqli_connect("localhost","root","","jewellery");
	
	$q = mysqli_query($cn,"select * from contactus");
	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>";
		echo "<td>".$r[0]."</td>";
		echo "<td>".$r[1]."</td>";
		echo "<td>".$r[2]."</td>";
		echo "<td>".$r[3]."</td>";
		echo "<td>".$r[4]."</td>";
		echo "<td><a href='deletecontectus.php?id=".$r[0]."'>DELETE</a></td>";

		echo  "</tr>";	
	}
?>
<?php 
	include("footer.php");
?>   