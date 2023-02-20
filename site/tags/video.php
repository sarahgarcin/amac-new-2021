<?php
/*
 * kirbytag html5video
 * html5 video player embedding for lazy people
 *
 * copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | code@jannikbeyerstedt.de
 * license: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License
 *
 * version 2.2 (31.05.2015)
 * changelog:
 * - v2.0: kirby 2 support
 * - v2.1: fix broken default values
 * - v2.2: autodetection for poster file
 */

kirbytext::$tags['video'] = array(
  'attr' => array(
    'hls',
    'h264',
    'webm'
  ),
  'html' => function($tag) {
    $source = $tag->attr('video');
    $file    = $tag->file($source);
    $url = $file ? $file->url() : url($source);

    $baseurl =  url('/video/');
    $posterurl = $baseurl . urlencode($source) . '-poster.png';

    return '<figure class="video-wrapper"><video class="html5player" controls preload="none" src="'. $url.'"></video></figure>';

  }

);
