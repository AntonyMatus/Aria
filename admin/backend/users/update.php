<?php

	session_start();

	header('Content-Type: application/json');

	if (!isset($_SESSION['auth_id'])) {
        echo json_encode([
        	'ok' => false,
        	'message' => "Acción no autorizada"
        ]);

        return false;
    }

    $is_admin = isset($_SESSION['rol']) ? $_SESSION['rol'] : 0;

    if (!$is_admin) {
    	echo json_encode([
        	'ok' => false,
        	'message' => "No puedes realizar esta acción"
        ]);

        return false;
    }

    try {
    	
    	require '../connection.php';

    	$id = $_GET['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$rol = $_POST['rol'];

		if (isset($_POST['change_password'])) {

			$password = $_POST['password'];
			$hash_password = password_hash($password, PASSWORD_BCRYPT);

			$sql = "UPDATE users_table SET `name` = :name, `email` = :email, `password` = :password, `rol` = :rol WHERE `id` = :id";

			$query = $connection->prepare($sql);

			$query->bindParam(':name', $name);
			$query->bindParam(':email', $email);
			$query->bindParam(':password', $hash_password);
			$query->bindParam(':rol', $rol);
			$query->bindParam(':id', $id);

			$updatedUser = $query->execute();

			if ($updatedUser) {
				echo json_encode([
					'ok' => true
				]);
			}

		} else {

			$sql = "UPDATE users_table SET `name` = :name, `email` = :email, `rol` = :rol WHERE `id` = :id";

			$query = $connection->prepare($sql);

			$query->bindParam(':name', $name);
			$query->bindParam(':email', $email);
			$query->bindParam(':rol', $rol);
			$query->bindParam(':id', $id);

			$updatedUser = $query->execute();

			if ($updatedUser) {
				echo json_encode([
					'ok' => true
				]);
			}

		}
		
    } catch (Exception $e) {
    	echo json_encode([
			'ok' => false
		]);
    }