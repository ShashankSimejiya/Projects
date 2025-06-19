<html>
    <body>
        <?php
        include("../connect.php");
	include("header.php");
    ?>

    <center><h1>USER CART</h1></center>

</div>


<p>Continue Shopping ==><a href='jewellery.php'>Continue</a> </p>
<?php
	if(isset($_POST['submit']))
	{
		$id=$_POST['id'];
		$unm=$_POST['unm'];
		$r1=$_POST['r1'];
		$r2=$_POST['r2'];
		$r3=$_POST['r3'];
		$r4=$_POST['r4'];
		$r5=$_POST['r5'];
		$r6=$_POST['r6'];
		$r7=$_POST['r7'];
		$qt=$_POST['qt'];
		$na=$qt*$r7;
		//echo "<br>".$id."<br>".$unm."<br>".$r1."<br>".$r2."<br>".$r3."<br>".$r4."<br>".$r5."<br>".$r6."<br>".$r7."<br>".$qt."<br>".$na."<br>";
		$q=mysqli_query($cn,"insert into cart values('','$unm','$r1','$r2','$r3','$r4','$r5','$r6','$r7','$qt','$na','pending')");
		echo "<script>window.location='cartdisp.php?unm=".$unm."'</script>";
	}
?>
<?php
        include("footer.php");
    ?>

</body>

</html>
