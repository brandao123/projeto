<?php 

function getcelulares($pdo){
	$sql = "SELECT *  FROM celular ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getcelularesByIds($pdo, $ids) {
	$sql = "SELECT * FROM celular WHERE id IN (".$ids.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
