<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<title>Super_Blog</title>
	<center><h1><b style="color:black ">Welcom to my super blog</b></h1></center>
<nav>   
			 <ul>
		     	<li><a href="home.php" >Home</a></li>
		     	<li><a href="sign-up.php">sign_up</a></li>
		    	 <li><a href="log-in.php">log_in</a></li>    
			 </ul>
		</nav></br></br>
</head>
<body>
	<p>here you can write all the news you like about sport</p>
	<form method="post" action="DB-connection/display-all-sp.php">
	<form method="post" action="spconnect.php">
<textarea name="message" rows="20" cols="50"> Votre message ici.
  </textarea></br>
  <input type="submit" value="save" />
</form>
	<input type="submit" value="watch my blog" />
</form>
</body>
</html>