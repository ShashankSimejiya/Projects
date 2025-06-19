<?php
	include('../connect.php');

	$id = $_POST['id'];
	$name = $_POST['name'];
        	$img = $_FILES['img']['name'];
        	$type = $_POST['type'];
        	$caret = $_POST['caret'];
	$gweight = $_POST['gweight'];
	$nweight = $_POST['nweight'];
        	$price = $_POST['price'];
        	
	move_uploaded_file($_FILES['img']['tmp_name'],"../image/".$_FILES['img']['name']);
	      
    	$q = mysqli_query($cn,"UPDATE jewellery SET name='$name',image='$img',type='$type',caret='$caret',gweight='$gweight',nweight='$nweight',price='$price' WHERE id='$id'");
	echo "<script>alert('Product Update Successfully...')</script>";
           	echo "<script>window.location='jewellery.php'</script>";
?>