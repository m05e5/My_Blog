<?php

try 
{
	 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	 $bdd = new PDO('mysql:host=localhost;dbname=my_blog', 'root', '', $pdo_options); 
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

					echo $donnees['id']."<br>".$donnees['User_name']."<br>".$donnees['Email'];

					include('../medblog.php');
					exit();
				}
			}
		}

?>