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
	<table border="1"  bgcolor="" align="center" cellpadding=5 cellspacing=4> 	
 	<tr>
 		<th colspan=3>Users Registration Form</th>
	</tr>
	<tr align="left">
		<th>Enter Name</th>
		<th>:</th>	
		<th><input type="text" name="name" required></th>
	</tr>
	<tr align="left">
		<th>Enter Surname</th>	
		<th>:</th>
		<th><input type="text" name="sname" required></th>
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
	<tr align="left">
		<th>Enter E-mail</th>
		<th>:</th>
		<th><input type="email" name="email" required></th>
	</tr>
	<tr align="left">
		<th>Enter Address</th>	
		<th>:</th>
		<th><input type="address" name="address" required></th>
	</tr>
	<tr align="left">
		<th>Enter Contact</th>	
		<th>:</th>
		<th><input type="contect" name="contact" required></th>
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
<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$sname=$_POST['sname'];
		$uname=$_POST['uname'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		
		$q1=mysqli_query($cn,"select * from signup where username='$uname'");
		if(mysqli_num_rows($q1)!=0)
		{
			echo "<script>alert('User Already Exist Try Another Username...')</script>";
			echo "<script>window.location='signup.php'</script>";
		}
		else
		{
			$q=mysqli_query($cn,"insert into signup values('','$name','$sname','$uname','$password','$email','$address','$contact','user');");
			echo "<script>window.location='login.php'</script>";		
		}
	}
	else
	{
		echo "";
	}
?>
<?php
	include("footer.php");
?>