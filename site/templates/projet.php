<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content">
	<h1><?php echo $page->title()->html()?></h1>
	
	<div class="row col-xs-12 col-sm-11 col-md-8 col-sm-offset-1 col-md-offset-2">
		<div class="images-projet col-xs-12 col-sm-7 col-sm-7">
			<ul class="row clearing-thumbs clearing-feature" data-clearing>
				<?php foreach($page->images() as $image): ?>
					<li class="col-xs-6 clearing-featured-img">
						<a href="<?php echo $image->url() ?>" title="<?php echo $image->url() ?>">
							<img data-caption="<?php echo $image->caption()->kirbytext() ?>" src="<?php echo thumb($image, array('width' => 300))->url() ?>" alt="<?php echo $image->name() ?>">
						</a>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
		<div class="infos-page col-xs-12 col-sm-4  col-md-4">
			<div class="infos-texte">
				<?php echo $page->text()->kirbytext()?>
			</div>
			<?php snippet('ressources'); ?>
		</div>
	</div>
</main>



<?php snippet('footer') ?>
