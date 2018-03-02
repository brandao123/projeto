<?php 

if(!isset($_SESSION['carrinho'])) {
	$_SESSION['carrinho'] = array();
}

function addCart($id, $quantidade) {
	if(!isset($_SESSION['carrinho'][$id])){ 
		$_SESSION['carrinho'][$id] = $quantidade; 
	}
}

function deleteCart($id) {
	if(isset($_SESSION['carrinho'][$id])){ 
		unset($_SESSION['carrinho'][$id]); 
	} 
}

function updateCart($id, $quantidade) {
	if(isset($_SESSION['carrinho'][$id])){
		if($quantidade > 0) {
			$_SESSION['carrinho'][$id] = $quantidade;
		} else {
		 	deleteCart($id);
		}
	}
}

function getContentCart($pdo) {
	
	$results = array();
	
	if($_SESSION['carrinho']) {
		
		$cart = $_SESSION['carrinho'];
		$roupas =  getroupasByIds($pdo, implode(',', array_keys($cart)));

		foreach($roupas as $roupa) {

			$results[] = array(
							  'id' => $roupa['id'],
							  'foto' => $roupa['foto'],
							  'name' => $roupa['nome'],
							  'preco' => $roupa['preco'],
							  'quantidade' => $cart[$roupa['id']],
							  'subtotal' => $cart[$roupa['id']] * $roupa['preco'],
						);
		}
	}
	
	return $results;
}

function getTotalCart($pdo) {
	
	$total = 0;

	foreach(getContentCart($pdo) as $roupa) {
		$total += $roupa['subtotal'];
	} 
	return $total;
}
