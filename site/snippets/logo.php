<?php $logo = $site->amaclogo()->toFile(); ?>

<!-- DESKTOP LOGO -->
<div class="desktop-menu menu">
	<div class="desktop-menu_logo logo">
		<a href="<?= $site->url()?>" title="<?= $site->title()?>">
			<img src="<?= $logo->url() ?>" alt="<?= $site->title()?>">
		</a>
	</div>
</div>