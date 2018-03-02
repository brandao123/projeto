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
		$informaticas =  getinformaticasByIds($pdo, implode(',', array_keys($cart)));

		foreach($informaticas as $informatica) {

			$results[] = array(
							  'id' => $informatica['id'],
							  'foto' => $informatica['foto'],
							  'name' => $informatica['nome'],
							  'preco' => $informatica['preco'],
							  'quantidade' => $cart[$informatica['id']],
							  'subtotal' => $cart[$informatica['id']] * $informatica['preco'],
						);
		}
	}
	
	return $results;
}

function getTotalCart($pdo) {
	
	$total = 0;

	foreach(getContentCart($pdo) as $informatica) {
		$total += $informatica['subtotal'];
	} 
	return $total;
}