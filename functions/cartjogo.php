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
		$jogos =  getjogosByIds($pdo, implode(',', array_keys($cart)));

		foreach($jogos as $jogo) {

			$results[] = array(
							  'id' => $jogo['id'],
							  'foto' => $jogo['foto'],
							  'name' => $jogo['nome'],
							  'preco' => $jogo['preco'],
							  'quantidade' => $cart[$jogo['id']],
							  'subtotal' => $cart[$jogo['id']] * $jogo['preco'],
						);
		}
	}
	
	return $results;
}

function getTotalCart($pdo) {
	
	$total = 0;

	foreach(getContentCart($pdo) as $jogo) {
		$total += $jogo['subtotal'];
	} 
	return $total;
}