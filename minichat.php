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
 