<?php 

function getpedidos($pdo){
	$sql = "SELECT *  FROM pedidos ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getpedidosByIds($pdo, $ids) {
	$sql = "SELECT * FROM pedidos WHERE id IN (".$ids.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}