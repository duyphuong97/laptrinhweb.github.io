<?php
	include 'sqlconnect.php';

	$email = addslashes($_POST['email']);
	$password = addslashes($_POST['pass']);

	$result = mysqli_query($conn,"SELECT * FROM client")
	or die("Could not execute query");

	$check=0;
    if ($email == "admin" && $password  == "admin") header('Location: demo.php');
    else{
    	while($row = mysqli_fetch_array($result)) {
        	if ($email == $row["email"] && $password == $row["pass"]){
        		$check = 1;
                header('Location: mau.php');
                break;
        	}
    	}
        if(!$check) echo "Login failed!";
	}
	$conn->close();
?>
