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
		$livros =  getlivrosByIds($pdo, implode(',', array_keys($cart)));

		foreach($livros as $livro) {

			$results[] = array(
							  'id' => $livro['id'],
							  'foto' => $livro['foto'],
							  'name' => $livro['nome'],
							  'preco' => $livro['preco'],
							  'quantidade' => $cart[$livro['id']],
							  'subtotal' => $cart[$livro['id']] * $livro['preco'],
						);
		}
	}
	
	return $results;
}

function getTotalCart($pdo) {
	
	$total = 0;

	foreach(getContentCart($pdo) as $livro) {
		$total += $livro['subtotal'];
	} 
	return $total;
}