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
	<form method="POST" action="fpasspro.php" name="f1">
	<table border="1"  bgcolor="" align="center" cellpadding=5 cellspacing=4>
 	<tr>
		<th colspan=3>If You Forget Password of Your Acoount..? <br> Then fill Up Following Details to Get Your Password.</th>
	</tr>
	<tr align="left">
		<th>Enter User Name</th>
		<th>:</th>
		<th>
		<?php
			$unm=$_GET['unm'];
			echo $unm;
			echo "<input type='hidden' name='unm' value=".$unm.">";
		?>
		</th>
	</tr>
	<tr align="left">
		<th>Enter E-mail</th>
		<th>:</th>
		<th><input type="email" name="email" required></th>
	</tr>
	<tr align="left">
		<th>Enter New Password</th>
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
<a href="login.php">Login</a> </p>
</center>
</body>
</html>

<?php
	include("footer.php");
?>