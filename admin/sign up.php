<?php
	include("header.php");
?>
<html>
	<head>
		<h1 align="center"> User Record </h1>
	</head>
</html>
<center><table cellpadding="10" border="2"  cellspacing="2" bordercolor="red" width=100% >
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Surname</th>
		<th>User Name</th>
		<th>Password</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact</th>
		<th></th>
		<th></th>
	</tr>
<?php
	$q=mysqli_query($cn,"select * from signup where type='user'");
	while($r=mysqli_fetch_array($q))
	{
		echo  "<tr>";
		echo  "<td>".$r[0]."</td>";
		echo  "<td>".$r[1]."</td>";
		echo  "<td>".$r[2]."</td>";
		echo  "<td>".$r[3]."</td>";
		echo  "<td>".$r[4]."</td>";
		echo  "<td>".$r[5]."</td>";
		echo  "<td>".$r[6]."</td>";
		echo  "<td>".$r[7]."</td>";
		echo "<td><a href='updatesignup.php?id=".$r[0]."'>UPDATE</a></td>";
		echo "<td><a href='deletesignup.php?id=".$r[0]."'>DELETE</a></td> " ;
		echo  "</tr>";
	}
?>
<?php
	include("footer.php");
?>