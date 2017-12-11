<?php
date_default_timezone_set('Asia/Bangkok');

	$db = array(
		'host' =>       'localhost',
		'user' =>       'bigfans',
		'password' =>   'R81Wf}TSC9vH',
		'name' =>       'redeem_db'
	);

	$db_con = mysqli_connect($db['host'], $db['user'], $db['password'], $db['name']);
	$db_con->query("set names utf8");
    // get the last id
    
?>
