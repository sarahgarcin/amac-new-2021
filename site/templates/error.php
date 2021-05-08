<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content" id="main-error">
	<h1><?php echo $page->title()->html()?></h1>
	
	<div class="row col-xs-12 col-sm-11 col-md-8 col-sm-offset-1 col-md-offset-2">
		<div class="col-xs-12 col-sm-3">
			<?php echo $page->text()->kirbytext()?>
		</div>
		<div class="col-xs-12 col-sm-8">
			<canvas id="stage" width="520" height="400"></canvas>
		</div>
	</div>
</main>




<?php snippet('footer') ?>

<?= js('assets/js/libs/virtualjoystick.js') ?>
<?= js('assets/js/libs/raphael.js') ?>
