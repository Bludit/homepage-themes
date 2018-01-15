<?php defined('BLUDIT') or die('Bludit'); ?>
<div class="container mb-5">

	<h2 class="my-4"><?php echo $_item['name'] ?></h2>

	<div class="row mt-4">
		<div class="col-md-8">
			<img class="img-fluid" src="<?php echo $_item['screenshoot_url'] ?>" alt="Screenshoot">
			<div class="my-4 text-center">
				<?php
					if (!empty($_item['demo_url'])) {
						echo '<a class="btn btn-primary" href="'.$_item['demo_url'].'" role="button" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> '.l('Live Demo',false).'</a>'.PHP_EOL;
					}

					if ($_item['price_usd']>0) {
						echo '<a class="btn btn-secondary" href="'.$_item['download_url'].'" role="button" target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i> '.l('Buy',false).' $'.$_item['price_usd'].'</a>'.PHP_EOL;
					} else {
						echo '<a class="btn btn-secondary" href="'.$_item['download_url'].'" role="button" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> '.l('Free Download',false).'</a>'.PHP_EOL;
					}

					if (!empty($_item['information_url'])) {
						echo '<a class="btn btn-secondary" href="'.$_item['information_url'].'" role="button" target="_blank"><i class="fa fa-info" aria-hidden="true"></i> '.l('More information',false).'</a>'.PHP_EOL;
					}
				?>
			</div>
		</div>

		<div class="col-md-4">
			<div class="my-4">
				<h3 class="my-3"><?php l('Description') ?></h3>
				<p><?php echo $_item['description'] ?></p>
			</div>

			<div class="my-4">
				<h3 class="my-3"><?php l('Features') ?></h3>
				<ul class="features">
					<?php
						foreach ($_item['features'] as $feature) {
							echo '<li>'.$feature.'</li>';
						}
					?>
				</ul>
			</div>

			<div class="my-4">
				<h4 class="my-3"><?php l('Last Update') ?></h4>
				<?php echo $_item['release_date'] ?>
			</div>

			<div class="my-4">
			<h4><?php l('Author') ?> <?php echo $_item['author_name'] ?></h4>
				<?php
					if (!empty($_item['author_facebook'])) {
						echo'<a class="author-social" href="'.$_item['author_facebook'].'" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>'.PHP_EOL;
					}
					if (!empty($_item['author_twitter'])) {
						echo'<a class="author-social" href="'.$_item['author_twitter'].'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>'.PHP_EOL;
					}
					if (!empty($_item['author_github'])) {
						echo'<a class="author-social" href="'.$_item['author_github'].'" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>'.PHP_EOL;
					}
					if (!empty($_item['author_youtube'])) {
						echo'<a class="author-social" href="'.$_item['author_youtube'].'" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>'.PHP_EOL;
					}
					if (!empty($_item['author_reddit'])) {
						echo'<a class="author-social" href="'.$_item['author_reddit'].'" target="_blank"><i class="fa fa-reddit" aria-hidden="true"></i></a>'.PHP_EOL;
					}
					if (!empty($_item['author_pinterest'])) {
						echo'<a class="author-social" href="'.$_item['author_pinterest'].'" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>'.PHP_EOL;
					}
					if (!empty($_item['author_flickr'])) {
						echo'<a class="author-social" href="'.$_item['author_flickr'].'" target="_blank"><i class="fa fa-flickr" aria-hidden="true"></i></a>'.PHP_EOL;
					}
					if (!empty($_item['author_google_plus'])) {
						echo'<a class="author-social" href="'.$_item['author_google_plus'].'" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>'.PHP_EOL;
					}
					if (!empty($_item['author_vk'])) {
						echo'<a class="author-social" href="'.$_item['author_vk'].'" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>'.PHP_EOL;
					}

				?>
			</div>

		</div>
	</div>

</div>