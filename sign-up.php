<?php
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName="my_blog";

?>
<!DOCTYPE.html>
<?php
	/*
try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd =new PDO('mysql:host=localhost;dbname=My_Blog', 'root', '', $pdo_options);
	}
*/?>
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
    			.foot{
  display: flex;
  width:100%;
  height: 200px;
  background-color: #173a60;
  flex-direction: row;
vertical-align: bottom;

}
h3{
  color: white;
  font-size: 15px;
  margin-top: 50px;
   margin-left: 300px; 
        /*margin-right: 380px;*/

}
h4{
  color: white;
  font-size: 15px;
  margin-top: 50px;
   margin-left: 80px; 
  }
  h5{
  color: white;
  font-size: 15px;
  margin-top: 50px;
   margin-left: 80px; 
  }


		</style>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<header>
		<title>
			Super_Blog
		</title>
	
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
		     		<a style="color: blue;" href="sign-up.php">sign_up</a>
		     	</li>
		    	 <li>
		    	 	<a href="log-in.php">log_in</a>
		    	 </li>    
			 </ul>
		</nav>
	</header>
	</head>
	<body>
		<p>
			<h1>
				<b>
					<i>SIGN_UP</i>
				</b>
			</h1>	                    
		       	<form method="post" action="DB-connection/connect.php">  
		          	<center>
		          		<input type="text" name="Name" id="Name" placeholder="Name" size="100" maxlength="30" /></br></br>
		          	</center>
		           	<center>
		           		<input type="text" name="Favorite" id="Favorite" placeholder="Favorite" size="100" maxlength="90" /></br></br>
		           	</center>
		            <center>
		            	<input  type="password" name="password" id="password"  placeholder="Password" size="100" maxlength="15" /></br></br>
		            </center>
		            <center>
		            	<input  type="password" name="check_password" id="check_password"  placeholder="confirm password" size="100" maxlength="15" /></br></br>
		            </center>
		            <center>
		            	<input type="Email" name="Email" id="Email" placeholder="adress Email" size="100" maxlength="30" /></br></br>
		            </center>
		            <center>
		            	<input type="submit" value="send" name="sending"/>
		            </center>
  				</form>
	

		</p>

<br><br><br><br><br><br><br><br><br>


<footer class="foot">
					<h3 class="finfo">
						<u>Information</u>
						<br>
						<br>
						About us
						<br>
						Term&Condition
						<br>
						Services
					</h3>
					<h4 class="fsocial">
						<u>social</u>
						<br>
						<img src="facebook.png" alt="Smiley face">
						<br>
						<img src="twitter.png" alt="Smiley face">
						<br>
						<img src="instagram.png" alt="Smiley face">
					</h4>
					<h5 class="fcontactus">
						<u>Contact us</u>
						<br>
						message:<textarea>Enter your message here</textarea>
						<br>
						<img src="twitter.png" alt="Smiley face">
						
					</h5>
			<!-- <img src="footfoot.png" alt="Smiley face" style="width:350px; height:80px; "> -->
		</footer>
	</body>
</html>	