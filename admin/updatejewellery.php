<center><h1>Update Jewellery</h1></center>

<table>
<?php
	include("../connect.php");

	$id = $_GET['id'];

	$q = mysqli_query($cn,"select * from jewellery where id = '$id' ");

	echo "<form action='updatejewellerypro.php' method='POST' enctype='multipart/form-data'>";

	while($r = mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">"; 
		
		echo "<table align='center'>";
		echo "<tr><td>Name :</td>";
		echo "<td><input type='text' name='name' value=".$r[1]."></td></tr>";

		echo "<tr><td>Image :</td>";
		echo "<td><input type='file' name='img' value=".$r[2]."></td></tr>";

		echo "<tr><td>Type :</td>";
		echo "<td><input type='text' name='type' value=".$r[3]."></td></tr>";

		echo "<tr><td>Caret :</td>";
		echo "<td><input type='text' name='caret' value=".$r[4]."></td></tr>";

		echo "<tr><td>Gweight :</td>";
		echo "<td><input type='text' name='gweight' value=".$r[5]."></td></tr>";

		echo "<tr><td>Nweight :</td>";
		echo "<td><input type='text' name='nweight' value=".$r[6]."></td></tr>";

		echo "<tr><td>Price :</td>";
		echo "<td><input type='text' name='price' value=".$r[7]."></td></tr>";

		

		echo "</table>";
	}
	echo "<center><input type='submit' name='update' value='Update'></centr>";
?>
 </table>
     </form>