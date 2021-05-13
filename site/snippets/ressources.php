<?php if($page->ressources()->isNotEmpty()):?>
	<?php $ressources = yaml($page->ressources()); ?>
	<div class="infos-ressources">
		<h4>Ressources</h4>
		<ul class="ressources-list">
			<?php foreach($ressources as $ressource):?>
				<li>
					<a href="<?php echo $ressource['file']?>" title="<?php echo $ressource['legende']?>" target="_blank">
						<div class="row">
							<div class="ress-icon col-xs-2 col-sm-3">
								<?php if($ressource['type'] == "doc"): ?>
									<img src="<?php echo $site->url()?>/assets/images/ressources.png" alt="ressources icône">
								<?php else : ?>
									<img src="<?php echo $site->url()?>/assets/images/liens.png" alt="liens icône">
								<?php endif ?>
							</div>
							<div class="ress-caption col-xs-10 col-sm-8">
								<?php echo $ressource['legende']?>
							</div>
						</div>
					</a>
				</li>
			<?php endforeach?>
		</ul>
	</div>
<?php endif ?>