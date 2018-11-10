<?php

	require_once dirname(__FILE__).'../../app/init.php';

	if (isset($_POST['name'])) :
			$name = $_POST['name'];

			if (!empty($name)) :

					$addedQuery = $db->prepare("
						INSERT INTO items (id, userID, name, done, created)
						VALUES ('', :user, :name, 0, CURRENT_TIMESTAMP)
					");

					$addedQuery->execute([
						'name' => $name,
						'user' => $user
					]);

			endif;

	endif;

	header('Location: ./../index.php');
