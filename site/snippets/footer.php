
  <footer role="contentinfo">
    <p><a href="<?php echo $site->url()?>/credits" title="Crédits"><?php echo $site->copyright() ?></a></p>
  </footer>

  <!-- scripts -->
  <?php if($kirby->option('env') == 'local'):?>
  	<?= js('bower_components/jquery/dist/jquery.js') ?>
	  <?= js('bower_components/jquery-ui/jquery-ui.min.js') ?>
	  <?= js('assets/js/libs/jquery.ui.touch-punch.min.js') ?>
	  <?= js('node_modules/@fancyapps/ui/dist/fancybox.umd.js') ?>
	  <?= js('assets/js/main.js') ?>
  <?php else : ?>
  	<?= js('assets/js/plugins.js') ?>
	  <?= js('assets/production/all.min.js') ?>
	<?php endif;?>



</body>
</html>
