<?php defined('BLUDIT') or die('BLUDIT'); ?>
<!-- Page Content -->
<div class="container">

	<!-- Page Heading -->
	<h1 style="font-size: 1.6em;" class="my-5 text-center"><?php l('little-description-paragraph1') ?></h1>

	<div class="row my-5">

		<?php foreach ($_items as $item): ?>

			<div class="col-lg-6 item">
			<div class="card h-100">
				<a href="<?php echo $item['permalink'] ?>">
					<div style="height: 400px; background: url('<?php echo $item['screenshot_url'] ?>'); background-repeat: no-repeat; background-position: center center; background-size: contain;"></div>
				</a>
				<div class="card-body">
					<h4 class="card-title"><a href="<?php echo $item['permalink'] ?>"><?php echo $item['name'] ?></a></h4>
					<h6 class="card-subtitle mb-3"><?php l('Made by') ?> <?php echo $item['author']['name'] ?></h6>
					<!-- <p class="card-description"><?php echo $item['description'] ?></p> -->
					<?php
						if (!empty($item['demo_url'])) {
							echo '<a class="btn btn-primary btn-sm" href="'.$item['demo_url'].'" role="button" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i> '.l('Live Demo',false).'</a>'.PHP_EOL;
						}

						if ($item['price_usd']>0) {
							echo '<a class="btn btn-secondary btn-sm" href="'.$item['download_url'].'" role="button" target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i> '.l('Buy',false).' $'.$item['price_usd'].'</a>'.PHP_EOL;
						} elseif ($item['price_usd']==-1) {
							echo '<a class="btn btn-secondary btn-sm" href="'.$item['download_url'].'" role="button" target="_blank"><i class="fa fa-shopping-cart" aria-hidden="true"></i> '.l('Buy from',false).' $1</a>'.PHP_EOL;
						} else {
							echo '<a class="btn btn-secondary btn-sm" href="'.$item['permalink'].'#download" role="button"><i class="fa fa-download" aria-hidden="true"></i> '.l('Download',false).'</a>'.PHP_EOL;
						}
					?>
				</div>
			</div>
			</div>

		<?php endforeach ?>

	</div>

</div>
