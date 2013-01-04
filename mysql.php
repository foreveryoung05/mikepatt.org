<?php
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_DATABASE','mikepatt.org');
	$con = mysql_connect(DB_HOST,DB_USER,DB_PASS);
	if (!$con)
		die('Could not connect: ' + mysql_error());
	mysql_select_db(DB_DATABASE,$con);
?>
