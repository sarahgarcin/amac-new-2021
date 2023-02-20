<?php

return function($site, $pages, $page) {

	$actualites = $page->children()->listed()->flip()->paginate(5);
  $pagination = $actualites->pagination();

  return compact('actualites', 'pagination');

};