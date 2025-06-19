<table align="center">
	<tr bgcolor=#e5bb61>
		<th>
			<?php
				include("header.php");
			?>
		</th>
	</tr>

<html>
<script>
function fpas()
{
	var unm=f1.uname.value;
	if(unm=="")
	{
		alert("Enter user name");
	}
	else
	{
		window.location="fpass.php?unm="+unm;
	}
}
</script>
<body>
<center>
	<form method="POST" action="logpro.php" name="f1">
	<table border="1"  bgcolor="" align="center" cellpadding=5 cellspacing=4>
 	<tr>
		<th colspan=3>Log in</th>
	</tr>
	<tr align="left">
		<th>Enter User Name</th>
		<th>:</th>
		<th><input type="text" name="uname" required></th>
	</tr>
	<tr align="left">
		<th>Enter Password</th>
		<th>:</th>
		<th><input type="password" name="password" required></th>
	</tr>
	<tr></tr>
	<tr>
		<td></td>
		<th>&nbsp;</th>
		<td><input type="submit" name="submit" value="Submit">     				<input type="reset" name="reset" value="Reset"></td>
	</tr>
</form>
</table>
<p align="center"><a href="index.php">Home Page</a>  |  
<label onclick="fpas()" style="cursor:pointer">Forget Password</label></p>
</center>
</body>
</html>

<?php
	include("footer.php");
?>