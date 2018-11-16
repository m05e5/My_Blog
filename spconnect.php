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
	
		$sql = "INSERT INTO spblog (comment) VALUES ('".$_POST['message']."')";
	
		if ($conn->query($sql) === TRUE) 
		{
    		echo $_POST['message'];
    		 ?>
    		<form method="post" action="spblog.php">
    		</br><center><input type="submit" value="Back to my blog" /></center>
			</form>	<?php
		} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
$conn->close();
?>
