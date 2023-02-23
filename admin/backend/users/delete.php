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

	 	$sql = "DELETE FROM `users_table` WHERE `id` = :id";

		$query = $connection->prepare($sql);

		$query->bindParam(':id', $id);

		$deletedUser = $query->execute();

		if ($deletedUser) {
			echo json_encode([
				'ok' => true
			]);
		}

    } catch (Exception $e) {
    	echo json_encode([
        	'ok' => false,
        	'message' => "Ocurrio un error."
        ]);
    }