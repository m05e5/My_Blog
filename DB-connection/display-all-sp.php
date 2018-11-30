<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBname = "my_blog";

// Create connection
	$conn =new mysqli($servername, $username, $password, $DBname);

// Check connection
	if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	}  

	$sql = "SELECT comment FROM spblog";
	$result = $conn->query($sql);

	if ($result->num_rows >0){
		//output data of each row
		while ($row = $result->fetch_assoc()) {
			echo $resultl;
		}
		} else {
    	echo "0 result";
		
	}
mysqli_close($conn);
?>	