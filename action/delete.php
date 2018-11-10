<?php

	require_once (dirname(__FILE__).'../../app/init.php');

	if(isset($_GET['as'], $_GET['item'])) :

		$as = $_GET['as'];
		$item = $_GET['item'];

		switch($as):
			case 'delete':

				$doneQuery = $db->prepare("
					DELETE FROM items
					WHERE items.id = :item
					AND userID = :user
				");

				$doneQuery->execute([
						'item' => $item,
						'user' => $user
				]);

			break;

		endswitch;

	endif;
	header('Location: ./../index.php');

