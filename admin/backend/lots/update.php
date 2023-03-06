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
    	$price_18_months_15_percentage = $_POST['price_18_15']; // enganche 18 meses 15%
    	$price_18_months_25_percentage = $_POST['price_18_25']; // enganche 18 meses 25%
    	$price_18_months_30_percentage = $_POST['price_18_30']; // enganche 18 meses 30%
		$price_24_months_15_percentage = $_POST['price_24_15']; // enganche 24 meses 15%
    	$price_24_months_25_percentage = $_POST['price_24_25']; // enganche 24 meses 25%
    	$price_24_months_30_percentage = $_POST['price_24_30']; // enganche 24 meses 30%
    	$available = $_POST['available']; // disponibilidad
 		
		$sql = "UPDATE lots_table SET `number` = :number, `area` = :area, `price_18_15` = :price_18_15, `price_18_25` = :price_18_25, `price_18_30` = :price_18_30, `price_24_15` = :price_24_15, `price_24_25` = :price_24_25, `price_24_30` = :price_24_30, `available` = :available WHERE `id` = :id";

		$query = $connection->prepare($sql);

		$query->bindParam(':number', $number);
		$query->bindParam(':area', $area);
		$query->bindParam(':price_18_15', $price_18_months_15_percentage);
		$query->bindParam(':price_18_25', $price_18_months_25_percentage);
		$query->bindParam(':price_18_30', $price_18_months_30_percentage);
		$query->bindParam(':price_24_15', $price_24_months_15_percentage);
		$query->bindParam(':price_24_25', $price_24_months_25_percentage);
		$query->bindParam(':price_24_30', $price_24_months_30_percentage);
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