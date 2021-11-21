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
	
	
	$query = "INSERT INTO tasks(title,subject,duration,due_date,priority) 
    VALUES ('$title','$subject','$duration','$due_date','$priority')";

	if(!databaseConnection($query)){
       echo "popp";
	}else{
        debug_to_console("Test");
	}


?>