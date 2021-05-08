<section class="section devis row">
	<div class="content large-centered medium-centered small-centered large-10 medium-10 small-10 columns">
		<div class="row">
			<div class="title text-center large-12 medium-12 small-12 columns">
	      <h2><?php echo $data->title()->html() ?></h2>
	    </div>
			<div class="submit-devis large-centered medium-centered small-centered large-12 medium-12 small-12 columns text-center">
				<div class="vertical-align">
					<a href="" title="demandez un devis">Demandez un devis</a>
				</div>
	 		 	<div class="devis-reponse large-centered medium-centered small-centered large-12 medium-12 small-12 columns text-center">
		  		<h3><?php echo $data->text()->html() ?></h3>
		  </div>
	 		</div>
	  </div>
  </div>
  <?php if ($form->hasMessage()): ?>
    <div class="message-form <?php e($form->successful(), 'success' , 'error')?>">
        <?php $form->echoMessage() ?>
    </div>
	<?php endif; ?>
	<?php snippet('form');?>
</section>