<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content">
	<h1><?php echo $page->title()->html()?></h1>
	
	<div class="row col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
		<div class="amac col-xs-12 col-sm-4">
			<h3>amac</h3>
			<?php echo $page->amac()->kirbytext()?>
			<div class="social-network">
				<ul>
					<?php $socials = $site->socialnetworks()->yaml(); 
					foreach($socials as $social): ?>
					<li>
	        <a href="<?php echo $social["link"];?>" title="social" target="_blank">
	          <?php echo $social["icon"];?>
	        </a>
	        </li>
	      <?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="nantes col-xs-12 col-sm-4"">
			<h3>amac > Nantes</h3>
			<?php echo $page->nantes()->kirbytext()?>
		</div>
		<div class="paris col-xs-12 col-sm-4"">
			<h3>amac > Paris</h3>
			<?php echo $page->paris()->kirbytext()?>
		</div>
	</div>
</main>


<?php snippet('footer') ?>
