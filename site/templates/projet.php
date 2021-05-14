<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content">
	<h1><?php echo $page->title()->html()?></h1>
	
	<div class="row col-xs-12 col-sm-11 col-md-8 col-sm-offset-1 col-md-offset-2">
		<div class="images-projet photoswipe col-xs-12 col-sm-7" itemscope itemtype="http://schema.org/ImageGallery">
			<div class="row">
				<?php foreach($page->images() as $image): ?>
						<figure class="col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?= $image->url(); ?>" itemprop="contentUrl" data-size="<?= $image->width(); ?>x<?= $image->height(); ?>"
                   title="<?= $image->text()->value(); ?>">
                    <img src="<?php echo thumb($image, array('width' => 300))->url() ?>" itemprop="thumbnail" alt="<?= $page->title()->value() ?> <?= $image->text()->value(); ?>" class="img-responsive"/>
                </a>
                <figcaption itemprop="caption description"><?= $image->text()->kirbytext() ?></figcaption>
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
