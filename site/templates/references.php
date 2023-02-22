<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content">
	<h1><?php echo $page->title()->html()?></h1>
	
	<div class="row col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
		<div class="artistes col-xs-12 col-sm-6 col-md-6">
			<h4>Artistes</h4>
			<?php echo $page->artistes()->kirbytext()?>
		</div>
		<div class="institutions col-xs-12 col-sm-6 col-md-6">
			<h4>Institutions</h4>
			<?php echo $page->institutions()->kirbytext()?>
		</div>
	</div>
</main>

<?php snippet('footer') ?>
