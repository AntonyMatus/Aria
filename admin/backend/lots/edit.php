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

    $id = $_GET['id'];

    if (isset($id) && !empty($id)) {

    	require '../connection.php';

	 	$sql = "SELECT * FROM lots_table where id = $id"; 
		$query = $connection->prepare($sql); 
		$query->execute();
		$lot = $query->fetch(PDO::FETCH_OBJ);

		echo json_encode([
			'ok' => true,
			'lot' => $lot
		]);
    	
    } else {
    	echo json_encode([
        	'ok' => false,
        	'message' => "URL invalida."
        ]);
    }