<?php 

function getjogos($pdo){
	$sql = "SELECT *  FROM jogo ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getjogosByIds($pdo, $ids) {
	$sql = "SELECT * FROM jogo WHERE id IN (".$ids.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
