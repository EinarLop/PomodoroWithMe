<?php

include('databaseConnection.php');

	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	
	$query = "INSERT INTO users(username, password, email, score) VALUES ('$username','$password', '$email', 0)";

	if(!databaseConnection($query)){
        echo "error";
	}else{
        echo "good";
	}


?>