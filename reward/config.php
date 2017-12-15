<?php
date_default_timezone_set('Asia/Bangkok');

	$db = array(
		'host' =>       'localhost',
		'user' =>       'mediacenter',
		'password' =>   'q1w2e3r4!!!',
		'name' =>       'mediacenter'
	);

	$db_con = mysqli_connect($db['host'], $db['user'], $db['password'], $db['name']);
	$db_con->query("set names utf8");
    // get the last id
    
?>
