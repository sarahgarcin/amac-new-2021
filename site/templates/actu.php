<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content">
	<h1><?php echo $page->title()->html()?></h1>
	<div class="row col-xs-12 col-sm-11 col-md-8 col-sm-offset-1 col-md-offset-2">
		<div class="actu-texte col-xs-12 col-sm-6">
			<p class="actu-texte-date"><?php echo $page->date('d/m/Y') ?></p>
			<?php echo $page->text()->kirbytext()?>
		</div>
		<div class="actu-images col-xs-12 col-sm-6">
			<ul>
				<?php foreach($page->images() as $image): ?>
					<li>
					<?php echo thumb($image, array('width' => 600)); ?>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
		
	</div>
</main>

<!-- <div class="content row">
	<h2><?php echo $page->title()->html()?></h2>
	<div class="actu-texte small-6 columns">
		<?php echo $page->date('d / m / Y') ?>
		<?php echo $page->text()->kirbytext()?>
	</div>
	<div class="actu-images small-6 columns">
		<ul>
			<?php foreach($page->images() as $image): ?>
				<li>
				<?php echo thumb($image, array('width' => 600)); ?>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
	
</div> -->

<?php snippet('footer') ?>
