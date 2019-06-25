<?php
session_start();

?>
<!DOCTYPE html>
<html>	
	<head>
		<div class="background-image">
			<style>
				body 
					{
					background-image: url('im.JPG');
					background-size: cover;
				
					}
			 	.li {
    				text-align: right;	
    				text-decoration: none;
    				color: white;
    				border: 1px solid blue;
    				background: blue;
    				font-weight: bold;	
    				padding: 2px;	
    				}


			</style>
		</div>

		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title>	
			Super_Blog
		</title>
		<a class='li' href="log-in.php">Log In</a>
		<a class='li' href="sign-up.php">Sign In</a>
	</head>
	<body>
		<center>	
			<h1>
				<b>
					<marquee bgcolor="	" scrollamount="5">
						Welcom to my super blog
					</marquee>
				</b>
			</h1>
		</center>
		<nav>   
				 <ul>  
		    	 	<li>
		    	 		<a href="Home.php">Home</a>
		    	 	</li> 
		     		<li>
		     			<a href="sign-up.php">sign_up</a>
		     		</li>
			    	<li>
			    	 	<a style="color: blue ;" href="log-in.php">log_in</a>
			    	</li>    
				 </ul>
		</nav>
		<p>
			<center>
				<h1>
					<b>
						<i>
							LOG_IN
						</i>
					</b>
				</h1>
			</center>
			<div class="mil">
			<section >
			<br>
			<br>	                    
		        <form method="POST" action="log-in.php">
		             <center>
		             	<input type="Email" name="Email" id="Email" placeholder="Email" size="40" maxlength="50" /></br></br>
		             </center>
		             <center>
		             	<input type="password" name="password" id="password" placeholder="password" size="40" maxlength="15" /></br></br></br></br>
		            </center>
		                        
  					<center>
  						<input type="submit" value="Log_In"/>
  					</center>
  				</form>
  				<br><br>
  					
  			</section>
  		</div>
		</p>
		<!-- <?php
		$_SESSION['Email']=$_POST['Email']

		?>
		 <p>        Je me souviens de toi ! Tu t'appelles <?php echo  $_SESSION['Email']; ?> !<br />        Et ton âge hummm... Tu as <?php echo $_SESSION['Email']; ?> --> ans, c'est ça ? :-D   
		</p> 
</body>
</html>
