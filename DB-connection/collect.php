<?php
	session_start();


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

	$sql = "SELECT Email, password FROM users";
	$result = $conn->query($sql);

	if ($result->num_rows >0){
		//output data of each row
		while ($row = $result->fetch_assoc()) {
			if ($row['Email']==$_POST['Email']) {
				if ($row['password']==$_POST['password']) {

					$req = $conn->prepare('SELECT id FROM  users WHERE (Email) = (?)');
					$res = $req->exec($row['Email']);
					echo $req;
					//include('../medblog.php');
				}
			}
		}
		} else {
    	echo "0 result";
		
	}
mysqli_close($conn);
?>