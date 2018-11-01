<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBname="my_blog";
	$conn =new mysqli($servername, $username, $password, $DBname);
	if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO posts (post) VALUES ('".$_POST['post']."')";
	if ($conn->query($sql) === TRUE) 
		{
    		$sql = "SELECT * FROM posts";
		} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
$conn->close();
	?>