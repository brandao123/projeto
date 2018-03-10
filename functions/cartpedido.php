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
		$pedidos =  getpedidosByIds($pdo, implode(',', array_keys($cart)));

		foreach($pedidos as $pedido) {

			$results[] = array(
							  'id' => $pedido['id'],
							 
							  'name' => $pedido['nome'],
							  'preco' => $pedido['preco'],
							  'status' => $pedido['status'],
							  'quantidade' => $cart[$pedido['id']],
							 
						);
		}
	}
	
	return $results;
}

function getTotalCart($pdo) {
	
	$total = 0;
    
	foreach(getContentCart($pdo) as $pedido) {
		$total += $pedido['subtotal'];
	} 
	return $total;
}
function getParcelaCart($pdo) {
	
	$parcela = 1;
    
	foreach(getContentCart($pdo) as $pedido) {
		$subtotal / $parcela['parcela'];
	} 
	return $parcela;
}
