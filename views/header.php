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
    <link href="../styles/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
</head>
<body>
	<div class="container">
		<header>
			<span class="left">
				<ul>
					<li><h1><a href="index.php">FoRUM</a></h1></li>
					<li><a href="#">News</a></li>
					<li>|</li>
					<li><a href="#">Forum</a></li>
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