<?php

include('databaseConnection.php');

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


    $id=$_POST['id'];

	$query = "SELECT * FROM tasks WHERE id=$id";
    $result = databaseConnection($query);

   if($result== FALSE){
		echo "fallo conexión";
    }


  


  

    

   

    
    
        $row = mysqli_fetch_assoc($result);
        
        $data = [
            "id" => $row["id"],
            "title" => $row["title"],
            "subject" => $row["subject"],
            "duration" => $row["duration"],
            "current_minutes" => $row["current_minutes"],
            "due_date" => $row["due_date"],
            "priority" => $row["priority"],
        ];
        
    

        echo json_encode($data);

	

?>