<?php if($page->ressources()->isNotEmpty()):?>
	<?php $ressources = $page->ressources()->toStructure(); ?>
	<div class="infos-ressources">
		<h4>Ressources</h4>
		<ul class="ressources-list">
			<?php foreach($ressources as $ressource):?>
				<li>
					<?php if($ressource->file()->isNotEmpty()):?>
						<a href="<?php echo $ressource->file()->toFile()->url()?>" title="<?php echo $ressource->legende()?>" target="_blank">
							<div class="row">
								<div class="ress-icon col-xs-2 col-sm-3">
									<img src="<?php echo $site->url()?>/assets/images/ressources.png" alt="ressources icône">
								</div>
								<div class="ress-caption col-xs-10 col-sm-8">
									<?php echo $ressource->legende()->kirbytext()?>
								</div>
							</div>
						</a>
					<?php endif?>
					<?php if($ressource->link()->isNotEmpty()):?>
						<a href="<?php echo $ressource->link()?>" title="<?php echo $ressource->legende()?>" target="_blank">
							<div class="row">
								<div class="ress-icon col-xs-2 col-sm-3">
									<img src="<?php echo $site->url()?>/assets/images/liens.png" alt="liens icône">
								</div>
								<div class="ress-caption col-xs-10 col-sm-8">
									<?php echo $ressource->legende()->kirbytext()?>
								</div>
							</div>
						</a>
					<?php endif?>

				</li>
			<?php endforeach?>
		</ul>
	</div>
<?php endif ?>
