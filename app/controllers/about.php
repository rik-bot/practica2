<?php




$title = 'My Blog :: About';

$post = '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, similique!</p>
<p>Assumenda, quae vitae! Rem dolores voluptatem asperiores quas quod animi.</p>
<p>Maiores tempora sunt iure deserunt quidem laboriosam at vel dolore.</p>';

$recent_posts = [
  1 => [
    'title' => 'An item',
    'slug' => lcfirst(str_replace(' ', '-', 'An item')),
  ],

  2 => [
    'title' => 'A second item',
    'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
  ],

  3 => [
    'title' => 'A third item',
    'slug' => lcfirst(str_replace(' ', '-', 'A third item')),
  ],

  4 => [
    'title' => 'A fourth item',
    'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')),
  ],

  5 => [
    'title' => 'And a fifth one',
    'slug' => lcfirst(str_replace(' ', '-', 'And a fifth one')),
  ],
];

include_once VIEWS . '/about.tpl.php';