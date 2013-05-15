<?php
	require_once('header.php');
?>
		
		<span class="content">
			<hr>
			<span class="leftBody">
				<br>
			    <h3 class="cat"><a href="#">Registration</a></h3><br>
					<div class="push-right">
						<form action="/index.php?page=create_category" method="post">
				            Name: <input type="text" name="name">
				            <input type="submit">
				        </form>
					</div>
			</span>
		</span>
		
<?php
	require_once('footer.php');
?>