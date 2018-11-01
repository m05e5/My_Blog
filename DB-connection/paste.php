<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBname="my_blog";
	$conn = mysqli_connect($servername, $username, $password, $DBname);
	if ($conn->connect_error) 
	{
    	die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO posts (post) VALUES ('".$_POST['post']."')";
	if ($conn->query($sql) === TRUE) 
		{
			$posts = $conn->query("SELECT * FROM posts");
			$result = $posts->fetch();
    		echo "-".$_POST['post'].$conn->error;
    		var_dump($result);
		} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
$conn->close();
	?>