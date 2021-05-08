<?php

return function($site, $pages, $page) {

	$actualites = $page->children()->visible()->flip()->paginate(5);
  $pagination = $actualites->pagination();

  return compact('actualites', 'pagination');

};