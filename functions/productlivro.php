<?php 

function getlivros($pdo){
	$sql = "SELECT *  FROM livro ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getlivrosByIds($pdo, $ids) {
	$sql = "SELECT * FROM livro WHERE id IN (".$ids.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
