<?php 

function getroupas($pdo){
	$sql = "SELECT *  FROM roupa ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getroupasByIds($pdo, $ids) {
	$sql = "SELECT * FROM roupa WHERE id IN (".$ids.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
