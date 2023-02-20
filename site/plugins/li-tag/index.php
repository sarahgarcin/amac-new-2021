<?php

Kirby::plugin('sarahgarcin/li-tag', [
  'tags' => [
    'li' => [
      'attr' => [
        'li', 
        'text', 
        'link', 
        'col'
      ],
      'html' => function($tag) {
        $title = $tag->attr('li');
        $text = $tag->attr('text');
        $link = $tag->attr('link');
        $col = $tag->attr('col');

        if(empty($col)):
            $col = 'col-xs-6';
        else:
            if($col == '1'):
                $col = 'col-xs-12';
            elseif($col == '2'):
                $col = 'col-xs-6';
            elseif($col == '3'):
                $col = 'col-xs-4';
            else:
                $col = 'col-xs-3';
            endif;
          endif;

        if(empty($link)):
            return '<li class="listEl '.$col.'"><h3>'.$title.'</h3><p>'.$text.'</p></li>';
        else:
        return '<li class="listEl '.$col.'"><a href="'.$link.'"><h3>'.$title.'</h3><p>'.$text.'</p></a></li>';
        endif;

      }
    ]
  ]
]);