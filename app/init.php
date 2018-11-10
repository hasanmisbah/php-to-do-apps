<?php
	session_start();

	$_SESSION['user_id'] = 1;

	$user = $_SESSION['user_id'];


		require 'config.php';
		$db = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USER, DB_PASS);

	if ( !isset($_SESSION['user_id']) ) :
			die('you are not logged in');
	endif;
