<?php

include('databaseConnection.php');
    

	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = databaseConnection($query);
  
  
	if($result == FALSE){
        echo "error";
    }
    elseif(mysqli_num_rows($result) == 0){
        echo "no data";
    }
	else{
       
	
    $row = mysqli_fetch_assoc($result);
    $data = [
        "id" => $row["id"],
    ];

    echo json_encode($data);
}
?>