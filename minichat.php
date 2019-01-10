<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <head>
     <title>Mini-chat</title>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  </head>
  <style type="text/css">
      form
          	{
            text-align:center;    
  			}    
  </style>    
  <body>
  	 <form action="minichat_post.php" method="post">
        <p>        
        	<label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
   	        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
        	<input type="submit" value="Envoyer" /> 
        </p>    
    </form>
    <?php
      try
       	{    
       	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;    
       	$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '', $pdo_options); 
 		$reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10'); 
 		 // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars) 
 		 while ($donnees = $reponse->fetch())
 		 	 {        
 		 	 	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';    
 		 	 }
 		 	  $reponse->closeCursor();
 		 } 
 		 catch(Exception $e) 
 		 {    
 		 	die('Erreur : '.$e->getMessage()); 
 		 }

