<?php 

function getinformaticas($pdo){
	$sql = "SELECT *  FROM informatica ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getinformaticasByIds($pdo, $ids) {
	$sql = "SELECT * FROM informatica WHERE id IN (".$ids.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
