<?php 

function getnotebooks($pdo){
	$sql = "SELECT *  FROM computador ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getnotebooksByIds($pdo, $ids) {
	$sql = "SELECT * FROM computador WHERE id IN (".$ids.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
