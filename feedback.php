<table align="center">
	<tr bgcolor=#e5bb61>
		<th>
			<?php
				include("header.php");
			?>
		</th>
	</tr>

<html>
<body>
<center>
	<form method="POST" action="#">
	<table border="1" bgcolor="" align="center"cellpadding=5 cellspacing="4">
 	<tr>
		<th colspan=3>Give Me Your Beautiful Suggestion</th>
	</tr>
	<tr align="left">
		<th>Enter Name</th>
		<th>:</th>	
		<th><input type="text" name="name" required></th>
	</tr>
	<tr align="left">
		<th>Enter Mobile</th>	
		<th>:</th>
		<th><input type="text" name="mobile" required></th>
	</tr>
	<tr  align="left">
		<th>Enter E-mail</th>	
		<th>:</th>
		<th><input type="text" name="email" required></th>
	</tr>
	<tr  align="left">
		<th>Enter Suggession</th>	
		<th>:</th>
		<th><textarea name="sugg" required></textarea></th>
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
</center>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$suggession=$_POST['sugg'];
		$q=mysqli_query($cn,"insert into feedback values('','$name','$mobile','$email','$suggession')");
		echo "<script>window.location='index.php'</script>";		
	}
	else
	{
		echo "";
	}
?>
<?php
	include("footer.php");
?>