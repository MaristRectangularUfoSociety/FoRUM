<?php
	require_once('header.php');
?>

<span class="content">
	<hr>
	<span class="leftBody">
		<?php foreach ($categories as $category) { ?>
			<br>
            <h3 class="cat"><a href="#">
				<?= $category->getName() ?>
			</a></h3><br>
					<div class="push-right">
						<?php foreach ($category->getForums() as $forum) { ?>
                          	<span class="topic">
								<?= $forum->getLatestTopic()->getName() ?>
							</span><br>
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