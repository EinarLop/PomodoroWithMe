<?php

include('databaseConnection.php');

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


	$id=$_POST['id'];
	$current_minutes=$_POST['current_minutes'];

	
	
	
	$query = "UPDATE tasks SET current_minutes = $current_minutes WHERE id=$id";

	if(!databaseConnection($query)){
       echo "Error";
	}else{
        echo "Good";
	}


?>