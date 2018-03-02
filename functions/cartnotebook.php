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
		$notebooks =  getnotebooksByIds($pdo, implode(',', array_keys($cart)));

		foreach($notebooks as $notebook) {

			$results[] = array(
							  'id' => $notebook['id'],
							  'foto' => $notebook['foto'],
							  'name' => $notebook['nome'],
							  'preco' => $notebook['preco'],
							  'quantidade' => $cart[$notebook['id']],
							  'subtotal' => $cart[$notebook['id']] * $notebook['preco'],
						);
		}
	}
	
	return $results;
}

function getTotalCart($pdo) {
	
	$total = 0;

	foreach(getContentCart($pdo) as $notebook) {
		$total += $notebook['subtotal'];
	} 
	return $total;
}