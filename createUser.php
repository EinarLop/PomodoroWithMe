<?php

include('databaseConnection.php');

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	
	$query = "INSERT INTO users(username, email, password) VALUES ('$username','$email','$password')";

	if(!databaseConnection($query)){
        debug_to_console("Test");
	}else{
        debug_to_console("Test");
	}


?>