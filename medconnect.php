<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBname="my_blog";

// Create connection
	$conn =new mysqli($servername, $username, $password, $DBname);

	// Check connection
	if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	}  
	
		$sql = "INSERT INTO medblog (comment) VALUES ('".$_POST['message']."')";
	
		if ($conn->query($sql) === TRUE) 
		{
    		echo $_POST['message'];
		} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
$conn->close();
?>
