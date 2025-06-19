<table align="center">
	<tr bgcolor=#e5bb61>
		<th>
			<?php
				include("header.php");
			?>
		</th>
	</tr>
	<th>
		<?php
			include("slider.php");
		?>
	</th>
</table>


<?php
	$count=0;
	$cn=mysqli_connect("localhost","root","","jewellery");
	$q = mysqli_query($cn,"select * from jewellery");
	echo "<table border=0 cellpadding=20 width=100%>"; 
	while($r = mysqli_fetch_array($q))
	{
		if($count%3==0)
		{
			echo "<tr><th>Name:".$r[1]."<br><img src='../image/".$r[2]."' width='400px' height='250px'><br>Type:".$r[3]."<br>Caret:".$r[4]."<br>Net Weight:".$r[5]."<br>Gross Weight:".$r[6]."<br>Price:".$r[7]."</th>";
		}
		else
		{
			echo "<th>Name:".$r[1]."<br><img src='../image/".$r[2]."' width='400px' height='250px'><br>Type:".$r[3]."<br>Caret:".$r[4]."<br>Net Weight:".$r[5]."<br>Gross Weight:".$r[6]."<br>Price:".$r[7]."</th>";
		}
		$count++;
	}
	echo "</table>";
	
?>
<?php
	include("footer.php");
?>
