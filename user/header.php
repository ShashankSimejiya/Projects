<?php
    
	include("../connect.php");
	session_start();
	if(!isset($_SESSION['user']))
	{
		header("location:../login.php");
	}
	$unm=$_SESSION['user'];
?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body 
	{
 		margin: 0;
  		font-family: Arial, Helvetica, sans-serif;
	}

	.topnav 
	{
  		overflow: hidden;

	}

	.topnav a 
	{
  		float: left;
  		color: white;
 	 	text-align: center;
  		padding: 14px 16px;
  		text-decoration: none;
  		font-size: 18px;
		background-color: #e5bb61;
	}

	.topnav a:hover 
	{
  		background-color: #ddd;
  		color: black;
	}

	.topnav a.active 
	{
  		background-color: #04AA6D;
  		color: white;
	}
	.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
	</style>
	</head>
<body>

<?php
	include("../connect.php");
?>
<div>
	<a href="index.php"><img src="../img/ec0.jpg" height="200px" width="1520px">
</div>

<div class="topnav">
<b><a href="index.php">HOME</a></b>
<b><a href="aboutus.php">ABOUT US</a></b>
<b><a href="jewellery.php">JEWELLERY</a></b>
<b><a href="feedback.php">FEEDBACK</a></b>
<b><a href="carrier.php">CARRIER</a></b>
<b><a href="contectus.php">CONTECT US</a></b>
<b><a href="cartdisp.php?unm=<?php echo $unm;?>">USER CART</a></b>
<div style=float:right>
<b><a href="logout.php">LOGOUT</a></b>
</div>
</body>
</html>
