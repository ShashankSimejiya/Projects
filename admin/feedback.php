<?php
	include("header.php");
?>
<html>
	<head>
		<h1 align="center"> Feedback Record </h1>
	</head>
</html>

<center><table cellpadding="10" border="2"  cellspacing="2" bordercolor="red" width=100% >	
	<tr>	
		<th align=center><b>Id</th>
		<th align=center><b>Name</th>
		<th align=center><b>Mobile No</th>
		<th align=center><b>E-Mail</th>
		<th align=center><b>Suggestion</th>
		<th align=center><b></th>
	</tr>
<?php
	$cn=mysqli_connect("localhost","root","","jewellery");
	
	$q = mysqli_query($cn,"select * from feedback");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>";
		echo "<td>".$r[0]."</td>";
		echo "<td>".$r[1]."</td>";
		echo "<td>".$r[2]."</td>";
		echo "<td>".$r[3]."</td>";
		echo "<td>".$r[4]."</td>";
		echo "<td><a href='deletefeedback.php?id=".$r[0]."'>DELETE</a></td>";

		echo "</tr>";	
	}
?>
<?php 
	include("footer.php");
?>   


	