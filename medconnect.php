<?php 
// Connexion à la base de données 
try 
{
	 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	 $bdd = new PDO('mysql:host=localhost;dbname=my_blog', 'root', '', $pdo_options); 
	 // Insertion du message à l'aide d'une requête préparée
	 $_SESSION['comment'] = $_POST['comment'];
	 $req = $bdd->prepare('INSERT INTO medblog (comment) VALUES( ?)'); 
 	 $req->execute(array($_POST['message']));
 	  // Redirection du visiteur vers la page du minichat
 	    header('Location: medblog.php');
 	    } 
 	    catch(Exception $e) 
 	    {    
 	    	die
 	    	('Erreur : '.$e->getMessage()); }   

?>