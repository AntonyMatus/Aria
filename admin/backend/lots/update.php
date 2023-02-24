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

    	$number = $_POST['number']; // número de Lote
    	$area = $_POST['area']; // área del terreno
    	// $money_advance = $_POST['money_advance']; // enganche
    	// $total_price = $_POST['total_price']; // precio total del terreno
    	$available = $_POST['available']; // disponibilidad
 		
		$sql = "UPDATE lots_table SET `number` = :number, `area` = :area, `available` = :available WHERE `id` = :id";

		$query = $connection->prepare($sql);

		$query->bindParam(':number', $number);
		$query->bindParam(':area', $area);
		$query->bindParam(':available', $available);
		$query->bindParam(':id', $id);

		$updatedLot = $query->execute();

		if ($updatedLot) {
			echo json_encode([
				'ok' => true
			]);
		}
    	
    } else {
    	echo json_encode([
        	'ok' => false,
        	'message' => "URL invalida."
        ]);
    }