<div class="nav row col-xs-12 col-sm-5">
	<div class="mobile-menu_btn">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<nav class="main-nav col-xs-12 row">
		<ul class="menu-1">
				<?php foreach ($site->menuproduction()->split() as $p): ?>
					<?php $p = $site->find($p);?>
				  <li>
				  	<a class="<?= r($p->isOpen(), 'active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
				  </li>
				<?php endforeach ?>
		</ul>
		
		<ul class="menu-2">
			<ul class="projets-menu">
				<?php foreach ($site->menuactu()->split() as $p): ?>
					<?php $p = $site->find($p);?>
				  <li>
				  	<a class="<?= r($p->isOpen(), 'active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
				  </li>
				<?php endforeach ?>
			</ul>
			<ul class="static-menu">
				<?php foreach ($site->menuequipe()->split() as $p): ?>
					<?php $p = $site->find($p);?>
				  <li>
				  	<a class="<?= r($p->isOpen(), 'active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
				  </li>
				<?php endforeach ?>
			</ul>
			<ul class="newsletter-menu">
				<?php foreach ($site->menunewsletter()->split() as $p): ?>
					<?php $p = $site->find($p);?>
				  <li>
				  	<a class="<?= r($p->isOpen(), 'active') ?>" href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
				  </li>
				<?php endforeach ?>
			</ul>
			<ul class="social-network">
				<?php $socials = $site->socialnetworks()->toStructure();?> 
				<?php foreach($socials as $social): ?>
					<li>
		        <a href="<?= $social->link()?>" title="<?= $social->title()?>" target="_blank">
		        	<i class="fa-brands <?= $social->icon()?>"></i>
		        </a>
	        </li>
      	<?php endforeach; ?>
			</ul>
		</ul>
	</nav>
</div>