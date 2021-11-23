<?php

include('databaseConnection.php');

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


	$title=$_POST['title'];
	$subject=$_POST['subject'];
	$duration=$_POST['duration'];
    $due_date=$_POST['due_date'];
    $priority=$_POST['priority'];
    $user_id=$_POST['user_id'];
	
	
	$query = "INSERT INTO tasks(user_id,title,subject,duration,current_minutes,due_date,priority,status) 
    VALUES ($user_id,'$title','$subject','$duration', 0, '$due_date','$priority', 'open')";

	if(!databaseConnection($query)){
       echo "popp";
	}else{
        debug_to_console("Test");
	}


?>