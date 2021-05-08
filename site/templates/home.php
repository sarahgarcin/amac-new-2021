<?php snippet('header') ?>
<?php snippet('head') ?>
<?php $count = 0; ?>

<div class="description-amac col-xs-12 col-sm-5 col-md-4 col-md-offset-1">
	<?php echo $page->description()->kirbytext()?>
</div>
<main class="content">
	<div class="text-menu row col-xs-12 col-sm-10 col-md-offset-1">
		<div class="text-production col-xs-12 col-sm-6 col-md-5">
			<?php echo $page->production()->kirbytext()?>
		</div>
		<div class="text-formation col-xs-12 col-sm-6 col-md-5">
			<?php echo $page->formation()->kirbytext()?>
		</div>
	</div>
	<div class="actu-grid">
		<?php $actus = $pages->visible()->find('journal')->children()->flip();
		$projects = $site->index()->filterBy('template', 'in', ['actu', 'projet']);
		$count = 0 ;?>
		<ul>
		<?php foreach($projects as $actu):?>
			<?php if($actu->accueil() == "oui") : ?>
				<?php $count ++;?>
				<?php if($count < 4) : ?>
					<li class="col-xs-12 col-sm-6 col-md-3 active">
						<span class="close-actu button-actu opened">x</span>
						<!-- <span class="open-actu button-actu">↓</span> -->
							<div class="actu-wrapper">
								<div class="actu-texte">
									<h2><?php echo $actu->title()->html() ?></h2>
									<p><?php echo excerpt($actu->text()->kirbytext(), 200, false) ?></p>
									<div class="actu-infos">
										<span class="date-actu"><?php echo $actu->date('d / m / Y')?></span>
										<!-- <a class="lire-plus" href="<?php echo $pages->find('journal')->url()?>#<?php echo $actu->uid()?>" title="<?php echo $actu->title()?>">Lire la suite</a> -->
										<a class="lire-plus" href="<?php echo $actu->url()?>" title="<?php echo $actu->title()?>">Lire la suite</a>
									</div>
								</div>
								<?php $image = $actu->thumb()->toFile(); ?>
								<div class="actu-image <?php e($image->isPortrait(), ' portrait', ' landscape') ?>">
				 					<img src="<?php echo $image->url(); ?>" alt="<?php echo $image->name()?>">
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