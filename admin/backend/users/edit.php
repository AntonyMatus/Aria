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

	 	$sql = "SELECT * FROM users_table where id = $id"; 
		$query = $connection->prepare($sql); 
		$query->execute();
		$user = $query->fetch(PDO::FETCH_OBJ);

		echo json_encode([
			'ok' => true,
			'user' => $user
		]);

    } catch (Exception $e) {
    	echo json_encode([
        	'ok' => false,
        	'message' => "URL invalida."
        ]);
    }