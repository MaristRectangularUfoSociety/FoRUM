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
			</a></h3><br><br>
				<div class="push-right">
					<?php foreach ($forum->getTopics() as $topic) { ?>
						<?php foreach ($topic->getPosts() as $post) { ?>
							<span class="desc">
								<?= $post->getMessage() ?>
							</span>
							<!--<span class="author">by Tommy Jones</span>-->
							<br><hr class="hrBody"><br>
				</div>
				<?php
					}
				  }
				}
			?>
	</span>
</span>
		
<?php
	require_once('footer.php');
?>