<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content">
	<h1><?php echo $page->title()->html()?></h1>
	<div class="actu-grid images-grid col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
		<ul class="row">
			<?php foreach($page->children()->visible() as $project):?>
				<li class="col-xs-12 col-sm-4 col-md-4">
					<div class="actu-wrapper">
						<div class="actu-texte">
							<h2><?php echo $project->title()->html() ?></h2>
							<div>
								<?php echo str::excerpt($project->text()->kirbytext(), 200, false) ?>
							</div>
							<div class="actu-infos" >
								<span class="date-actu"><?php echo $project->date('d / m / Y')?></span>
								<a class="lire-plus" href="<?php echo $project->url()?>" title="<?php echo $project->name()?>">Lire la suite</a>
							</div>
						</div>
					<div class="actu-image">
						<a href="<?php echo $project->url() ?>" title="<?php echo $project->title() ?>">
							<?php $image = $project->thumb()->toFile();?>
							<img src="<?php echo $image->url(); ?>" alt="<?php echo $image->name()?>">
						</a>
					</div>
					</div>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
	
</main>

<?php snippet('footer') ?>
