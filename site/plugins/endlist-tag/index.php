<?php

Kirby::plugin('sarahgarcin/endlist-tag', [
  'tags' => [
    'endlist' => [
      'html' => function($tag) {
        return '</ul>';

      }
    ]
  ]
]);