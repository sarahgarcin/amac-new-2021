<?php

Kirby::plugin('sarahgarcin/link-tag', [
  'tags' => [
		'link' => [
				'attr' => [
					'class',
					'lang',
					'rel',
					'role',
					'target',
					'title',
					'text',
					'popup'
				],
				'html' => function ($tag) {
					if (empty($tag->lang) === false) {
						$tag->value = Url::to($tag->value, $tag->lang);
					}

					if($tag->popup === 'yes' || $tag->target === "_blank"):
						$target = "_blank";
					else:
						$target = "";
					endif;

					// if value is a UUID, resolve to page/file model
					// and use the URL as value
					// if (
					// 	Uuid::is($tag->value, 'page') === true ||
					// 	Uuid::is($tag->value, 'file') === true
					// ) {
					// 	$tag->value = Uuid::for($tag->value)->model()->url();
					// }

					return Html::a($tag->value, $tag->text, [
						'rel'    => $tag->rel,
						'class'  => $tag->class,
						'role'   => $tag->role,
						'title'  => $tag->title,
						'target' => $target,
					]);
				}
			],
	]
]);