<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content">
	<h1><?php echo $page->title()->html()?></h1>
	<div class="row col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
		<div class="texte-page col-xs-12 col-sm-8 col-sm-offset-2">
			<div class="texte-courant-page">
				<?php echo $page->text()->kirbytext()?>
			</div>
		</div>
		<div class="form col-xs-12 col-sm-8 col-sm-offset-2">
			<div class="mailchimp-form">
				<?php snippet('form') ?>
			</div>
			
		</div>
	</div>
</main>

<?php snippet('footer') ?>
