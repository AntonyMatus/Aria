<?php

    $id = $_GET['id'];

    if (isset($id) && !empty($id)) {

    	require '../../admin/backend/connection.php';

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