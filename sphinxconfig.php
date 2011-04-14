<?php

$common = Array (
	'stopwords' => '/usr/local/sphinx/stop_words.txt'
);

$projects = Array ();

$projects['example_project'] = Array ();
$projects['example_project']['sources'] = Array (
	'articles' => Array (
		'sql_query' => 'SELECT id, id AS filter_id, add_time, title, content * FROM articles;',
		'sql_attr_uint' => 'filter_id'
		'sql_attr_uint' => 'add_time'
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
		)
	)
);

?>