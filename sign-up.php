<?php
session_start();

try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$PDO =new pdo('mysql:host=localhost;dbname=My_Blog', 'root', '', $pdo_options);
}
$_SESSION['name']=$_POST['Name'];
?>
<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
	 		.li 
	 			{
    				text-align: right;	
    				text-decoration: none;
    				color: white;
    				border: 1px solid blue;
    				background: blue;
    				font-weight: bold;	
    				padding: 2px;	
    			}

		</style>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title>
			Super_Blog
		</title>
	</head>
	<body>
		<a class='li' href="log-in.php">Log In</a>
		<a class='li' href="sign-up.php">Sign In</a>
		<center>
			<h1>
				<b>Welcom to my super blog</b>
			</h1>
		</center>
		<nav>   
			 <ul>  
		     	<li>
		     		<a href="Home.php">Home</a>
		     	</li> 
		     	<li>
		     		<a style="color: white;" href="sign-up.php">sign_up</a>
		     	</li>
		    	 <li>
		    	 	<a href="log-in.php">log_in</a>
		    	 </li>    
			 </ul>
		</nav>
		<p>
			<h1>
				<b>
					<i>SIGN_UP</i>
				</b>
			</h1>	                    
		       	<form method="post" action="DB-connection/connect.php">  
		          	<center>
		          		<input type="text" name="Name" id="Name" placeholder="Name" size="125" maxlength="10" /></br></br>
		          	</center>
		           	<center>
		           		<input type="text" name="Favorite" id="Favorite" placeholder="Favorite" size="125" maxlength="10" /></br></br>
		           	</center>
		            <center>
		            	<input  type="password" name="password" id="password"  placeholder="Password" size="125" maxlength="10" /></br></br>
		            </center>
		            <center>
		            	<input  type="password" name="check_password" id="check_password"  placeholder="confirm password" size="125" maxlength="10" /></br></br>
		            </center>
		            <center>
		            	<input type="Email" name="Email" id="Email" placeholder="adress Email" size="125" maxlength="30" /></br></br>
		            </center>
		            <center>
		            	<input type="submit" value="send" name="sending"/>
		            </center>
  				</form>
	

		</p>



	</body>
</html>	