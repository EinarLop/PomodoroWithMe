<?php

include('databaseConnection.php');

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}


	$name=$_POST['name'];
	$description=$_POST['description'];
	$score=$_POST['score'];
    $restaurant=$_POST['restaurant'];
    $address=$_POST['address'];
    $date= '2016-10-11';
    $image='./images/coffee.jpeg';

	
	
	$query = "INSERT INTO dines(name,description,score,restaurant,address,date,image) VALUES ('$name','$description','$score','$restaurant','$address', '$date','$image')";

	if(!databaseConnection($query)){
        debug_to_console("Error");
	}else{
        debug_to_console("Test");
	}


?>