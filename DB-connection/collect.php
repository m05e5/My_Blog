<?php
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "";
	$DBname = "my_blog";

// Create connection
//conn =new mysqli($servername, $username, $password, $DBname);



	try
	{
		$conn = new PDO('mysql:host=localhost;dbname=my_blog;charset=utf8', 'root', '');
	}catch(Exeption $e)
	{
		die($e->getMessage());
	}





	// Check connection


	$sql = "SELECT Email, password FROM users";
	$result = $conn->query($sql);

		//output data of each row
		while ($row = $result->fetch()) {
			if ($row['Email']==$_POST['Email']) {
				if ($row['password']==$_POST['password']) {

					$req = $conn->prepare('SELECT id, Email, User_name FROM  users WHERE Email = ?');
					$req->execute(array($row['Email']));
					$donnees = $req->fetch();	

					//echo $donnees['id']."<br>".$donnees['User_name']."<br>".$donnees['Email'];

					$_SESSION['id'] = $donnees['id'];
					$_SESSION['User_name'] = $donnees['User_name'];
					$_SESSION['Email'] = $donnees['Email'];

					
					header('hw_GetAndLock(connection, objectID)ocation : ../medblog.php');
					exit();
				}
			}
		}

?>