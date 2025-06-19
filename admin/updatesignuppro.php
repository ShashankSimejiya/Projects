<?php

        include('../connect.php');

        $id = $_POST['id'];
	$name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
		$email = $_POST['email'];
		$address = $_POST['address'];
        $contect = $_POST['contect'];
       
	//move_uploaded_file($_FILES['img']['tmp_name'],"photos/".$_FILES['img']['name']);
      
    
           $q = mysqli_query($cn,"UPDATE signup SET name='$name',surname='$surname',username='$username',password='$password',email='$email',address='$address',contect='$contect' WHERE id='$id'");
            echo "<script>alert('User Update Successfully...')</script>";
            echo "<script>window.location='sign up.php'</script>";
    
    
    ?>