<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content">
	<h1><?php echo $page->title()->html()?></h1>
	
	<div class="row col-xs-12 col-sm-11 col-md-8 col-sm-offset-2 col-md-offset-2">
		<div class="row col-xs-12 col-sm-7 col-md-6">
			<div class="texte-page col-xs-12 col-sm-7 col-md-7">
				<?php echo $page->text()->kirbytext()?>
			</div>
		</div>
	</div>
</main>

<?php snippet('footer') ?>
