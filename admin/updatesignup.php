<center><h1>Update Jewellery</h1></center>

<table>
<?php
	include("../connect.php");

	$id = $_GET['id'];

	$q = mysqli_query($cn,"select * from signup where id = '$id' ");

	echo "<form action='updatesignuppro.php' method='POST' enctype='multipart/form-data'>";

	while($r = mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">"; 
		
		echo "<table align='center'>";
		echo "<tr><td>Name :</td>";
		echo "<td><input type='text' name='name' value=".$r[1]."></td></tr>";

		echo "<tr><td>Surname:</td>";
		echo "<td><input type='text' name='surname' value=".$r[2]."></td></tr>";

		echo "<tr><td>Username :</td>";
		echo "<td><input type='text' name='username' value=".$r[3]."></td></tr>";

		echo "<tr><td>Password :</td>";
		echo "<td><input type='text' name='password' value=".$r[4]."></td></tr>";

		echo "<tr><td>Email :</td>";
		echo "<td><input type='email' name='email' value=".$r[5]."></td></tr>";

		echo "<tr><td>Address :</td>";
		echo "<td><input type='text' name='address' value=".$r[6]."></td></tr>";

		echo "<tr><td>Contect No :</td>";
		echo "<td><input type='text' name='contect' value=".$r[7]."></td></tr>";

		echo "</table>";
	}
	echo "<center><input type='submit' name='update' value='Update'></centr>";
?>
 </table>
     </form>
</body>
</html>