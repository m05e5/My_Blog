<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName="my_blog";

// Create connection
	//$conn =new mysqli($servername$, $username, $password, $DBname);


	try{
		$pdo_options['PDO::ATTR_ERRMODE'] = PDO::ERRMODE_EXCEPTION;
		$pdo = new PDO('mysql:host=localhost;dbName=my_blog;charset=utf8', 'root', '', $pdo_options);


		if( isset($_POST['sending']) ){

			if(	isset($_POST['Name']) && !empty($_POST['Name']) &&isset($_POST['Favorite']) && !empty($_POST['Favorite'] ) && isset($_POST['check_password']) && !empty($_POST['check_password']) && isset($_POST['Email']) && !empty($_POST['Email']) && isset($_POST['password']) && !empty($_POST['password']) ) {


					$name = htmlspecialchars($_POST['Name']);
					$Favorite = htmlspecialchars($_POST['Favorite']);
					$check_password = htmlspecialchars($_POST['check_password']);
					$Email = htmlspecialchars($_POST['Email']);
					$password = htmlspecialchars($_POST['password']);


					$db_req = $pdo->prepare('INSERT INTO users (User_name, Favoritetopic, Password, Email) VALUES (?, ?, ?, ?)');

					$db_req->execute(array($name, $Favorite, $password, $Email));

					

					


				




			}else{

				die('Données incorrects');
				exit();
			}

		}


	}catch(Exception $e){
		die($e->getMessage());
	}

?>
