<?php
	require_once('header.php');
?>
		
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
		
<?php
	require_once('footer.php');
?>
