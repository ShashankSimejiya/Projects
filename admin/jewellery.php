<?php
	include("header.php");
?>
<html>
<body>
<center>
	<form method="POST" action="#" enctype="multipart/form-data">
	
	<center><table cellpadding="4" border="2" bordercolor="red" cellspacing="4"  >
 	<tr>
 		<h1><th colspan=3> ADD IMAGE</th></h1>
	</tr>
	<tr align="left">
		<th>Enter Name</th> 	 
		<th>:</th>	
		<th><input type="text" name="name" required></th>
	</tr>
	<tr align="left">
		<th>Enter Photo</th>	 
		<th>:</th>	
		<th><input type="file" name="photo" reqired></th>
	</tr>
	<tr align="left">
		<th>Enter Type</th> 	 
		<th>:</th>	
		<th><input type="radio" name="type" value="GOLD">GOLD</th>
	</tr>
	<tr align="left">
		<th></th>
		<th></th>
		<th><input type="radio" name="type" value="SILVER">SILVER</th>
	</tr>
	<tr align="left">
		<th></th>
		<th></th>
		<th><input type="radio" name="type" value="DIAMOND">DIAMOND</th>
	</tr>
	
	<tr align="left">
		<th>Enter Caret</th> 	 
		<th>:</th>	
		<th><input type="text" name="caret" required></th>
	</tr>
	<tr align="left">
		<th>Enter Gross Weight</th>	 
		<th>:</th>	
		<th><input type="text" name="gweight" required></th>
	</tr>
	<tr align="left">
		<th>Enter Net Weight</th>	 
		<th>:</th>	
		<th><input type="text" name="nweight" required></th>
	</tr>
	<tr align="left">
		<th>Enter Price</th>	 
		<th>:</th>	
		<th><input type="text" name="price" required></th>
	</tr>	
	<tr></tr>
	<tr>
		<td></td>
		<th>&nbsp;</th>
		<td><input type="submit" name="submit" value="Submit">  
		<input type="reset" name="reset" value="Reset"></td>
	</tr>
</form>
</table>
<p align="center"><a href="index.php">Home Page</a></p>
</center>
</body>
</html>

<center><h1>GOLD ITEMS</h1></center>

<center><table cellpadding="10" border="2"  cellspacing="2" bordercolor="red" width=100% >
	<tr>
		<th>Name</th>
		<th>Photo</th>
		<th>Type</th>
		<th>Caret</th>
		<th>Gross Weight</th>
		<th>Net Weight</th>
		<th>Price</th>
		
		<th></th>
		<th></th>
	</tr>
<?php
	$q = mysqli_query($cn,"select * from jewellery where type='GOLD'");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>
			<th>".$r[1]."</th>
			<th><img src='../image/".$r[2]."' width=200 height=100></th>
			<th>".$r[3]."</th>
			<th>".$r[4]."</th>
			<th>".$r[5]."</th>
			<th>".$r[6]."</th>
			<th>".$r[7]."</th>
			

			<th><button><a href='updatejewellery.php?id=".$r[0]." '>UPDATE</a></button></th>
			<th><button><a href='deletejewellery.php?id=".$r[0]." '>DELETE</a></button></th>
		</tr>";
	}
?>
</table></center>

<center><h1>SILVER ITEMS</h1></center>

<center><table cellpadding="10" border="2"  cellspacing="2" bordercolor="red" width=100% >
	<tr>
		<th>Name</th>
		<th>Photo</th>
		<th>Type</th>
		<th>Caret</th>
		<th>Gross Weight</th>
		<th>Net Weight</th>
		<th>Price</th>
		
		<th></th>
		<th></th>
	</tr>
<?php
	$q = mysqli_query($cn,"select * from jewellery where type='SILVER'");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>
			<th>".$r[1]."</th>
			<th><img src='../image/".$r[2]."' width=200 height=100></th>
			<th>".$r[3]."</th>
			<th>".$r[4]."</th>
			<th>".$r[5]."</th>
			<th>".$r[6]."</th>
			<th>".$r[7]."</th>
			
			<th><button><a href='updatejewellery.php?id=".$r[0]." '>UPDATE</a></button></th>
			<th><button><a href='deletejewellery.php?id=".$r[0]." '>DELETE</a></button></th>
		</tr>";
	}
?>
</table></center>


<center><h1>DIAMOND ITEMS</h1></center>

<center><table cellpadding="10" border="2"  cellspacing="2" bordercolor="red" width=100% >
	<tr>
		<th>Name</th>
		<th>Photo</th>
		<th>Type</th>
		<th>Caret</th>
		<th>Gross Weight</th>
		<th>Net Weight</th>
		<th>Price</th>
		
		<th></th>
		<th></th>
	</tr>
<?php
	$q = mysqli_query($cn,"select * from jewellery where type='DIAMOND'");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr>
			<th>".$r[1]."</th>
			<th><img src='../image/".$r[2]."' width=200 height=100></th>
			<th>".$r[3]."</th>
			<th>".$r[4]."</th>
			<th>".$r[5]."</th>
			<th>".$r[6]."</th>
			<th>".$r[7]."</th>
			
			<th><button><a href='updatejewellery.php?id=".$r[0]." '>UPDATE</a></button></th>
			<th><button><a href='deletejewellery.php?id=".$r[0]." '>DELETE</a></button></th>
		</tr>";
	}
?>
</table></center>

<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$photo = $_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"../upload/".$_FILES['photo']['name']);
		$type=$_POST['type'];
		$caret=$_POST['caret'];
		$gweight=$_POST['gweight'];
		$nweight=$_POST['nweight'];
		$price=$_POST['price'];
		
		
			$q=mysqli_query($cn,"INSERT INTO `jewellery` (`name`, `image`, `type`, `caret`, `gweight`, `nweight`,`price`) VALUES ('$name', '$photo', '$type', '$caret', '$gweight', '$nweight','$price')");
			echo "<script>alert('Item insert Successfully...')</script>";
			echo "<script>window.location='jewellery.php'</script>";		

	}
	else
	{
		echo "";
	}
?>


<?php
	include("footer.php");
?>
			