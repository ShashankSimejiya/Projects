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
	<form method="POST" action="#" >
	<table border="0" bgcolor="" align="center"cellpadding=5 cellspacing="4" width="100%">
 	<tr>
		<th>
			<h2>Akshar Jewellers<br>Nagar Road,<br>Junagadh.<br>Mo :- 90997 67168<br>E-Mail :- shashanksimejiya218@gmail.com
			</h2>
		</th>
	<th>
	<table border="1" bgcolor="" align="center" cellpadding=5 cellspacing="4">
 	<tr>
		<th colspan=3>Contect Details</th>
	</tr>
	<tr align="left">
		<th align=right>Enter Name</th>
		<th>:</th>	
		<th><input type="text" name="name" required></th>
	</tr>
	<tr align="left">
		<th align=right>Enter Mobile</th>	
		<th>:</th>
		<th><input type="text" name="mobile" required></th>
	</tr>
	<tr align="left">
		<th align=right>Enter E-mail</th>	
		<th>:</th>
		<th><input type="text" name="email" required></th>
	</tr>
	<tr align="left">
		<th align=right>Enter Address</th>	
		<th>:</th>
		<th><input type="text"name="address" required></th>
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
</th>
</tr>
</center>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$q=mysqli_query($cn,"insert into contactus values('','$name','$mobile','$email','$address')");
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