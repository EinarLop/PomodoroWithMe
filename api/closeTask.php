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
    $user_id=$_POST['user_id'];
	
	
	$query = "UPDATE tasks SET status = 'closed' WHERE id=$id";

	if(!databaseConnection($query)){
       echo "First Error";
	}else{
	

    $queryTwo = "UPDATE users SET score = $current_minutes WHERE id=$user_id";

    if(!databaseConnection($queryTwo)){
        echo "Second Error";
     }else{
         echo "Second Good";
     }
    }
?>