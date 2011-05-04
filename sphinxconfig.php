<?php

$generatedSphinxConfFileName = '/path/to/sphinx.conf';

$common = Array (
	'stopwords' => '/usr/local/sphinx/stop_words.txt'
);

$searchd = Array (
	'max_matches' => 100000,
	'port' => 3312,
	'log' => '/usr/local/sphinx/sphinx.log',
	'pid_file' => '/usr/local/sphinx/sphinx.pid'
);

$projects = Array ();

$projects['example_project'] = Array ();
$projects['example_project']['sources'] = Array (
	'articles' => Array (
		'sql_query_pre' => Array (
			'SELECT null FROM dual',
			'SET NAMES utf8'
		)
		'sql_query' => 'SELECT id, id AS filter_id, add_time, title, content, rate FROM articles;',
		'sql_attr_uint' => Array ( 'filter_id', 'add_time' ),
		'sql_attr_float' => 'rate'
	),
	'comments' => Array (
		'sql_query_pre' => 'SELECT null FROM dual',
		'sql_query' => 'SELECT id, articles_id, add_time, content FROM comments;',
		'sql_attr_uint' => 'articles_id'
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