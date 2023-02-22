<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content">
	<h1><?php echo $page->title()->html()?></h1>
	
	<div class="row col-xs-12 col-sm-11 col-md-8 col-sm-offset-1 col-md-offset-2">
		<div class="images-projet col-xs-12 col-sm-7">
			<div class="row">
				<?php foreach($page->images() as $image): ?>
						<figure class="col-xs-6">
							<a href="<?= $image->url()?>" 
							title="<?= $image->caption()?>" 
							data-fancybox="gallery"
  						data-caption="<?= $image->caption()->html() ?>">
  							<img src="<?php echo $image->thumb(['width' => 300, 'quality' => 80,])->url() ?>" itemprop="thumbnail" alt="<?= $image->alt()?>" class="img-responsive"/>
  						</a>
            </figure>
						</a>
				<?php endforeach ?>
			</div>
		</div>
		<div class="infos-page col-xs-12 col-sm-4 col-md-4">
			<div class="infos-texte">
				<?php echo $page->text()->kirbytext()?>
			</div>
			<?php snippet('ressources'); ?>
		</div>
	</div>
</main>



<?php snippet('footer') ?>
