<?php

$cn = mysqli_connect("localhost","root","","jewellery");

$uname = $_POST['uname'];
$password = $_POST['password'];

$q = mysqli_query($cn,"select * from signup where username='$uname' and password='$password'");

$r=mysqli_fetch_array($q);

		if($r[3]==$uname && $r[4]==$password && $r[8]=='user')
		{
			session_start();
			$_SESSION['user']=$uname;
			header("location:user\index.php");
		}
		else if($r[3]==$uname && $r[4]==$password && $r[8]=='admin')
		{
			session_start();
			$_SESSION['admin']=$uname;
			header("location:admin\index.php");
		}
?>