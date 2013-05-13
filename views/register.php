<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FoRUM</title>
    <meta content="Nicholas La Roux, Matthew Webber, Travis Beatty" name="author">
    <meta content="Forum of Rectangular Ufo Messages" name="description">
    <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
	<div class="container">
		<header>
			<span class="left">
				<ul>
					<li><h1><a href="index.html">FoRUM</a></h1></li>
					<li><a href="#">News</a></li>
					<li>|</li>
					<li><a href="">Forum</a></li>
					<li>|</li>
					<li><a href="#">Help</a></li>
				</ul>
			</span>
			<span class="right login">
				<input type="text" placeholder="username"></input>
				<input type="password" placeholder="password"></input>
				<button>Log In</button>
			</span>
		</header
		
		<span class="content">
			<hr>
			<span class="leftBody">
				<br>
			    <h3 class="cat"><a href="#">Registration</a></h3><br>
					<div class="push-right">
						<form action="../scripts/regUser.php" method="POST/">
							Please fill out the fields below<br><br>
							Username (will be displayed on posts)<br>
							<input type="text" name="usernmame" placeholder="username"></input><br><br>
							Password<br>
							<input type="password" name="passwordHashed" placeholder="password"></input><br><br>
							Confirm Password<br>
							<input type="password" placeholder="confirm"></input><br><br>
							<input type="submit" />
						</form>	
					</div>
			</span>
		</span>
		
		<footer>
		    <br>
		    <hr>
			&#169;2013 Marist Rectangular Ufo Society
		</footer>
		
	</div>
</body>
</html>
