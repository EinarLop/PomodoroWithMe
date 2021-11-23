<?php

include('databaseConnection.php');

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
    $user_id=$_POST['user_id'];
    // debug_to_console($user_id);

	$query = "SELECT * FROM tasks WHERE user_id=$user_id AND status='open'";
    $result = databaseConnection($query);
    $data = new ArrayObject(array());
    $i=0;
    

   

    if($result== FALSE){
		echo "fallo conexión";
    }
    
    while($row = mysqli_fetch_assoc($result)){
        
        $current = array(
            "id" => $row["id"],
            "title" => $row["title"],
            "subject" => $row["subject"],
            "duration" => $row["duration"],
            "current_minutes" => $row["current_minutes"],
            "due_date" => $row["due_date"],
            "priority" => $row["priority"],
        );

        $data -> append($current);
        
    
    };
        echo json_encode($data);

	

?>