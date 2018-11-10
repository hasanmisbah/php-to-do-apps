<?php

	require_once (dirname(__FILE__).'../../app/init.php');

	$itemsQuery = $db->prepare("
				SELECT id, name, done
				FROM items
				WHERE userID = :user
			");

		$itemsQuery->execute([
			'user' => $_SESSION['user_id']
		]);

		$items = $itemsQuery->rowCount() ? $itemsQuery : [ ];
