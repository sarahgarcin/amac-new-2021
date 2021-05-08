<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content">
	<h1><?php echo $page->title()->html()?></h1>
	
	<div class="row col-xs-12 col-sm-11 col-md-8 col-sm-offset-2 col-md-offset-2">
		<div class="texte-page col-xs-12 col-sm-8 col-md-7">
			<div class="chapeau-page">
				<?php echo $page->chapeau()->kirbytext()?>
			</div>
			<div class="texte-courant-page">
				<?php echo $page->text()->kirbytext()?>
			</div>
		</div>
		<div class="infos-page col-xs-12 col-sm-4">
			<div class="infos-texte">
				<?php echo $page->infos()->kirbytext()?>
			</div>
			<?php snippet('ressources'); ?>
		</div>
	</div>
	
</main>

<?php snippet('footer') ?>
