<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <meta name="author" content="<?php echo $site->author()->html() ?>">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

  <?php echo css('assets/css/flexboxgrid.min.css') ?>
  <?php echo css('assets/css/main.css') ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn’t work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <meta name="og:site_name" content="<?php echo $site->ogsite_name()->html() ?>">
  <meta name="og:description" content="<?php echo $site->description()->html() ?>">
  <meta name="og:url" content="<?php echo $site->url() ?>">
  <meta name="og:image" content="<?php echo $site->ogimage()->html() ?>">
  <meta name="og:type" content="website">

  <meta name="twitter:title" content="<?php echo $site->title()->html() ?>">
  <meta name="twitter:description" content="<?php echo $site->description()->html() ?>">
  <meta name="twitter:url" content="<?php echo $site->url() ?>">
  <meta name="twitter:image" content="<?php echo $site->ogimage()->html() ?>">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:creator" content="<?php echo $site->author()->html() ?>">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

</head>
<body
   data-login="<?php e($site->user(),'true', 'false') ?>"
   data-template="<?php echo $page->template() ?>"
   data-intended-template="<?php echo $page->intendedTemplate() ?>">



