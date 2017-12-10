<?php
date_default_timezone_set('Asia/Bangkok');

	$db = array(
		'host' =>       'localhost',
		'user' =>       'pacedev3_mahanak',
		'password' =>   'wLLPS8hNp5wX',
		'name' =>       'pacedev3_mahanakhon'
	);

	$db_con = mysqli_connect($db['host'], $db['user'], $db['password'], $db['name']);
	$db_con->query("set names utf8");
    // get the last id
    
?>
