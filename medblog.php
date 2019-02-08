<?php
session_start();
	

 
/*try
       	{    
       	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;    
       	$bdd = new PDO('mysql:host=localhost;dbname=my_blog', 'root', '', $pdo_options); 
*/
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<title>Super_Blog</title>
	<center><h1><b style="color:black ">Welcome to my super blog</b></h1></center>
<nav>   
			 <ul>
		     	<li><a href="home.php" >Home</a></li>
		     	<li><a href="sign-up.php">sign_up</a></li>
		    	 <li><a href="log-in.php">log_in</a></li>    
			 </ul>
		</nav></br></br>
		 <p>        Salut <?php echo $_SESSION['Name']; ?> !<br /> </p>
</head>
<body>
	<p>Here you can write all the news you like about medecine</p>
<form method="post" action="medconnect.php">
		<textarea name="message" id="message" rows="20" cols="50"> Votre message ici.</textarea></br>
  		<input type="submit" value="save" />
</form>
	<a type="submit" value="watch my blog" href=""DB-connection/display-all-sp.php"" />
	 <?php
      try
       	{    
       	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;    
       	$bdd = new PDO('mysql:host=localhost;dbname=my_blog', 'root', '', $pdo_options); 
 		$reponse = $bdd->query('SELECT comment FROM medblog ORDER BY ID '); 
 		 // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars) 
 		 while ($donnees = $reponse->fetch())
 		 	 {        
 		 	 	echo '<p><strong>' . htmlspecialchars($donnees['comment']) . '</strong></p>';    
 		 	 }
 		 	  $reponse->closeCursor();
 		 } 
 		 catch(Exception $e) 
 		 {    
 		 	die('Erreur : '.$e->getMessage()); 
 		 }
 		?>
</body>
</html>