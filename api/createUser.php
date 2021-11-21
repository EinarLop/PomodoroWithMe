<?php

include('databaseConnection.php');

	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	
	$query = "INSERT INTO users(username, password, email) VALUES ('$username','$password', '$email')";

	if(!databaseConnection($query)){
        echo "error";
	}else{
        echo "good";
	}


?>