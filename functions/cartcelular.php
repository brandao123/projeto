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
		$celulares =  getcelularesByIds($pdo, implode(',', array_keys($cart)));

		foreach($celulares as $celular) {

			$results[] = array(
							  'id' => $celular['id'],
							  'foto' => $celular['foto'],
							  'name' => $celular['nome'],
							  'preco' => $celular['preco'],
							  'quantidade' => $cart[$celular['id']],
							  'subtotal' => $cart[$celular['id']] * $celular['preco'],
						);
		}
	}
	
	return $results;
}

function getTotalCart($pdo) {
	
	$total = 0;

	foreach(getContentCart($pdo) as $celular) {
		$total += $celular['subtotal'];
	} 
	return $total;
}