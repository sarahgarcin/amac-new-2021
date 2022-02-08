<?php

kirbytext::$tags['list'] = array(
  'attr' => array(
    'list'
  ),
  'html' => function($tag) {
    $list = $tag->attr('list');

    return '<ul class="list row'.$list.'">';
  }
);