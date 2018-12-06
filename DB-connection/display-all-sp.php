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
		$rows = $result->fetch_assoc();

		foreach ($result as $row) {
			echo $row; ?><br><?php
		}
		} else {
    	echo "0 result";
		
	}
mysqli_close($conn);
?>	