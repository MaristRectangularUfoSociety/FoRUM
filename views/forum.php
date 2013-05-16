<?php
	require_once('header.php');
?>
		
<span class="content">
	<hr>
	<span class="leftBody">
		<?php foreach ($category->getForums() as $forum) { ?>
			<br>
	    	<h3 class="cat"><a href="#">
				<?= $forum->getName() ?>
			</a></h3><br>
				<div class="push-right">
					<?php foreach ($forum->getTopics() as $topic) { ?>
						<span class="topic">
							<?= $forum->getName() ?>
						</span><br>
						<!--<span class="author"> by Tommy Jones</span>-->
						<span class="desc">
							<?= $forum->getDescription() ?>
						</span><br><hr class="hrBody">
				</div>
				<?php
					}
				}
			?>
	</span>
</span>
		
<?php
	require_once('footer.php');
?>