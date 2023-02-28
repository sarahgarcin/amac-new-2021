<?php snippet('header') ?>
<?php snippet('head') ?>
<?php $count = 0; ?>


<main class="content">
	<h1 style="visibility: hidden;"><?= $site->title() ?></h1>
	<div class="description-amac col-xs-12 col-sm-6 col-md-4">
		<?php echo $page->description()->kirbytext()?>
	</div>
	<div class="text-menu row col-xs-12 col-sm-12 col-md-10">
		<div class="text-production col-xs-12 col-sm-6 col-md-6">
			<?php echo $page->production()->kirbytext()?>
		</div>
		<div class="text-formation col-xs-12 col-sm-6 col-md-6">
			<?php echo $page->formation()->kirbytext()?>
		</div>
	</div>
	<div class="actu-grid">
		<?php $projects = $site->index()->filterBy('template', 'in', ['actu', 'projet']);
		$count = 0 ;?>
		<ul>
		<?php foreach($projects as $actu):?>
			<?php if($actu->accueil() == "oui") : ?>
				<?php $count ++;?>
				<?php if($count < 4) : ?>
					<li class="col-xs-12 col-sm-6 col-md-3 draggable">
						<span class="button-actu">x</span>
							<div class="actu-wrapper">
								<div class="actu-texte">
									<h2><?php echo $actu->title()->html() ?></h2>
									<?php echo $actu->text()->excerpt(200, false) ?>
									<div class="actu-infos">
										<span class="date-actu"><?= $actu->date()->toDate('d/m/Y')?></span>
										<a class="lire-plus" href="<?= $site->find('journal')->url() ?>#<?= $actu->uid() ?>" title="<?= $actu->title()?>">Lire la suite</a>
									</div>
								</div>
								<?php $image = $actu->thumb()->toFile(); ?>
								<div class="actu-image <?php e($image->isPortrait(), ' portrait', ' landscape') ?>">
				 					<img src="<?php echo $image->url(); ?>" alt="<?php echo $image->alt()?>">
								</div>
							</div>
					</li>
				<?php endif ?>
			<?php endif ?>
		<?php endforeach ?>
		</ul>
	</div>
	
</main>

<?php snippet('footer') ?>
