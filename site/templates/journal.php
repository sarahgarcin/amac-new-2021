<?php snippet('header') ?>
<?php snippet('head') ?>

<main class="content">
	<h1><?php echo $page->title()->html()?></h1>
	
	<div class="actu-grid col-xs-12 col-sm-8 col-sm-offset-2 col-md-4  col-md-offset-4">
		<ul>
				<?php foreach($actualites as $actu):?>
					<li class="actus" id="<?php echo $actu->uid()?>">
						<div class="actu-name">
							<div class="actu-date">
								<span><?php echo $actu->date('d / m / Y') ?></span>
							</div>
							<h2><?php echo $actu->title()->html()?></h2>	
						</div>
						<div class="actu-resume">
							<?php echo str::excerpt($actu->text()->kirbytext(), 200, false) ?>
						</div>
						<div class="actu-text">
							<?php echo $actu->text()->kirbytext()?>
						</div>
						<div class="actu-images">
							<ul>
							<?php foreach($actu->images() as $image):?>
								<li class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
									<img src="<?php echo $image->url(); ?>" alt="<?php echo $image->name()?>">
								</li>
							<?php endforeach ?>
							</ul>
						</div>
						<div class="arrow-wrapper">
							<div class="arrow">
								<span class="close">↑</span>
								<span class="open">↓</span>
							</div>
						</div>
					</li>
				<?php endforeach ?>
		</ul>
		<nav class="actu-page">
      <ul>
        <?php if($pagination->hasPrevPage()): ?>
	        <li>
	        	<a href="<?php echo $pagination->prevPageURL() ?>">&larr;</a>
	        </li>
        <?php endif ?>

        <?php foreach($pagination->range(5) as $r): ?>
        <li>
        	<a<?php if($pagination->page() == $r) echo ' class="active"' ?> href="<?php echo $pagination->pageURL($r) ?>">
        		<?php echo $r ?>	
        	</a>
        </li>
        <?php endforeach ?>

        <?php if($pagination->hasNextPage()): ?>
        	<li class="last">
        		<a href="<?php echo $pagination->nextPageURL() ?>">&rarr;</a>
        	</li>
        <?php endif ?>

      </ul>
    </nav>
  </div>
</main>

<?php snippet('footer') ?>
