<?php

Kirby::plugin('sarahgarcin/list-tag', [
  'tags' => [
    'list' => [
      'html' => function($tag) {
        return '<ul class="list row">';

      }
    ]
  ]
]);
