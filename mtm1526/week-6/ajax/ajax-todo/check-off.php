<?php

require_once 'includes/db.php';

$errors = array();

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($id)) {
		$errors['id'] = true;
	}

	if (empty($errors)) {
		$sql = $db->prepare('
			UPDATE todo
			SET status = 1
			WHERE id = :id
		');
		$sql->bindValue(':id', $id, PDO::PARAM_INT);
		$sql->execute();
	}
}
