<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content">
	<h1><?php echo $page->title()->html()?></h1>
	
	<div class="row col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
		<div class="colonne-left col-xs-12 col-sm-6 col-md-5">
			<div class="equipe-chapeau">
				<?php echo $page->chapeau()->kirbytext()?>
			</div>
			<div class="equipe-bio">
				<?php echo $page->virginie()->kirbytext()?>
			</div>
			<div calass="equipe-bio">
				<?php echo $page->celine()->kirbytext()?>
			</div>
		</div>
		<div class="colonne-right col-xs-12 col-sm-6 col-md-5">
			<div class="equipe-bio">
				<?php echo $page->marie()->kirbytext()?>
			</div>
		</div>
	</div>
</main>

<?php snippet('footer') ?>
