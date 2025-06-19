<table align="center">
	<tr bgcolor=#e5bb61>
		<th>
			<?php
				include("header.php");
			?>
		</th>
	</tr>
</table>
<html>
<body background="">
<center>
	<form method="POST" action="#">
	<table border="1" bgcolor="" align="center" cellpadding=5 cellspacing="4">
 	<tr>
		<th colspan=3>Career Opportunities</th>
	</tr>
	<tr>
		<th colspan=3>Always looking for people who blend with our brand</th>
	</tr>
	<tr align="left">
		<th>Enter Name</th>
		<th>:</th>
		<th><input type="text" name="name" required></th>
	</tr>
	<tr  align="left">
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
		<th>Select Job</th>
		<th>:</th>	
		<th><input type="radio"name="job"value="ACCOUNTANT">ACCOUNTANT</th>
	</tr>
	<tr align="left">
		<th></th>
		<th></th>
		<th><input type="radio"name="job"value="CA">CA</th>
 	</tr>
	<tr align="left">
		<th></th>
		<th></th>
		<th><input type="radio"name="job"value="WEBSITE">WEBSITE</th>
	</tr>
	<tr  align="left">
		<th>Uploard File</th>
		<th>:</th>	
		<th><input type="file" name="upfile" required></th>
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
		$job=$_POST['job'];
		$upfile=$_POST['upfile'];
		$q=mysqli_query($cn,"insert into carrier values('','$name','$mobile','$email','$job','$upfile')");
		echo "<script>window.location='index.php'</script>";		
	}
	else
	{
		echo "";
	}
?>
<?php
	include("footer.php");
