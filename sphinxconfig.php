<?php

$common = Array (
	'stopwords' => '/usr/local/sphinx/stop_words.txt'
);

$projects = Array ();

$projects['example_project'] = Array ();
$projects['example_project']['sources'] = Array (
	'articles' => Array (
		'sql_query' => 'SELECT id, id AS filter_id, add_time, title, content FROM articles;',
		'sql_attr_uint' => Array ( 'filter_id', 'add_time' )
	),
	'comments' => Array (
		'sql_query' => 'SELECT id, id AS filter_id, articles_id, add_time, content FROM comments;',
		'sql_attr_uint' => Array ( 'filter_id', 'articles_id' )
	)
);

$projects['example_project']['hosts'] = Array (
	'example.com' => Array (
		'prefix' => 'ex_',
		'source' => Array (
			'sql_user' => 'dbuser',
			'sql_pass' => 'dbpass'
		),
		'sources' => Array (
			'articles' => Array (
				'path' => '/home/example/sphinx/articles/articles',
				'stopwords' => ''
			),
			'comments' => Array ( 'path' => '/home/example/sphinx/comments/comments' )
		)
	),
	'super.com' => Array (
		'prefix' => 'su_',
		'source' => Array (
			'sql_user' => 'dbuser',
			'sql_pass' => 'dbpass'
		),
		'sources' => Array (
			'articles' => Array (
				'path' => '/home/super/sphinx/articles/articles'
			),
			'comments' => Array ( 'path' => '/home/super/sphinx/comments/comments' )
		)
	)
);

?>