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

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$rol = $_POST['rol'];

		$hash_password = password_hash($password, PASSWORD_BCRYPT);
			
		$sql = "INSERT INTO users_table (name, email, password, rol) VALUES(:name, :email, :password, :rol)";

		$query = $connection->prepare($sql);

		$query->bindParam(':name', $name);
		$query->bindParam(':email', $email);
		$query->bindParam(':password', $hash_password);
		$query->bindParam(':rol', $rol);

		$createUser = $query->execute();

		if ($createUser) {
			echo json_encode([
				'ok' => true
			]);
		}

    } catch (Exception $e) {
    	echo json_encode([
			'ok' => false
		]);
    }