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
				<form action="../scripts/loginUser.php" method="POST">
					<input type="text" name="usernmame" placeholder="username"></input>
					<input type="password" name="password" placeholder="password"></input>
					<input type="submit" />
				</form>
			</span>
		</header>
		
		<span class="content">
			<hr>
			<span class="leftBody">
<?php
                foreach ($categories as $category) {
?>
                    <br>
                    <h3 class="cat"><a href="#"><?= $category->getName() ?></a></h3><br>
                        <div class="push-right">
<?php
                            foreach ($category->getForums() as $forum) {
?>
                            <span class="topic"><?= $forum->getLatestTopic()->getName() ?></span><br>
                                <span class="desc"><?= $forum->getDescription() ?></span><br><hr class="hrBody">
<?php
                            }
                }
?>
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
