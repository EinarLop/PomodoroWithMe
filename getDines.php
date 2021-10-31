<?php

include('databaseConnection.php');

// function debug_to_console($data) {
//     $output = $data;
//     if (is_array($output))
//         $output = implode(',', $output);

//     echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
// }

	$query = "SELECT * FROM dines ORDER BY date DESC";
    $result = databaseConnection($query);
    $data = new ArrayObject(array());
    $i=0;
    



    if($result== FALSE){
		echo "fallo conexión";
    }
    
    while($row = mysqli_fetch_assoc($result)){
        
        $current = array(
            "name" => $row["name"],
            "description" => $row["description"],
            "score" => $row["score"],
            "restaurant" => $row["restaurant"],
            "address" => $row["address"],
            "date" => $row["date"],
            "image" => $row["image"]
        );

        $data -> append($current);
        
    
    };
        echo json_encode($data);

	

?>