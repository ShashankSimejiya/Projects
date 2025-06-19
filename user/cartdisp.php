<html>
<table align="center">
	<tr bgcolor=#e5bb61>
		<th>
			<?php
				include("header.php");
			?>
		</th>
	</tr>
</table>

   
</div>


<p>Continue Shopping ==><a href='jewellery.php'>Continue</a> </p>

<center><table cellpadding="10" border="2" bordercolor="#e5bb61" cellspacing="4"  width=100%>
	<tr>
		<th>Name</th>
		<th>Photo</th>
		<th>Type</th>
		<th>Caret</th>
		<th>Gross Weight</th>
		<th>Net Weight</th>
		<th>Price</th>
		<th>Quentity</th>
		<th>Amount</th>
		<th></th>
	</tr>

<?php
	if(isset($_GET['unm']))
	{
	$unm=$_GET['unm'];

	$q1 = mysqli_query($cn,"select * from cart where unm='$unm'");
	while($r = mysqli_fetch_array($q1))
	{

		echo "<tr>
			<th>".$r[2]."</th>
			  <th><img src='../image/".$r[3]."' width=200 height=100></th>
			  <th>".$r[4]."</th>
			  <th>".$r[5]."</th>
			  <th>".$r[6]."</th>
			  <th>".$r[7]."</th>
			  <th>".$r[8]."</th>
			  <th>".$r[9]."</th>
			  <th>".$r[10]."</th>
			  <th><a href='cdel.php?id=".$r[0]."'>DELETE</a></th>
			  </tr>";
	}
}
?>
</table></center>
<?php
	//echo "<div><div>Total Amount : ".$tot."</div>";
	echo "<div><div>To Checkout, Click here    =>>   <a href='checkout.php?u=$unm'>Procced to Chekout</a></div></div>";
?>


<?php
        include("footer.php");
?>

</body>

</html>
