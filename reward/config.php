<?php
date_default_timezone_set('Asia/Bangkok');

	$db = array(
		'host' =>       'localhost',
		'user' =>       'root',
		'password' =>   'root',
		'name' =>       'redeem_db'
	);

	$db_con = mysqli_connect($db['host'], $db['user'], $db['password'], $db['name']);
	$db_con->query("set names utf8");
    // get the last id
    
?>
