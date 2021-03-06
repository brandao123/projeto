<?php 
include'headerlogin.php';
 ?>
<?php 
 	session_start();
	require_once "functions/productcelular.php";
	require_once "functions/cartcelular.php";

	$pdoConnection = require_once "connection.php";

	if(isset($_GET['acao']) && in_array($_GET['acao'], array('add', 'del', 'up'))) {
		
		if($_GET['acao'] == 'add' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			addCart($_GET['id'], 1);			
		}

		if($_GET['acao'] == 'del' && isset($_GET['id']) && preg_match("/^[0-9]+$/", $_GET['id'])){ 
			deleteCart($_GET['id']);
		}

		if($_GET['acao'] == 'up'){ 
			if(isset($_POST['prod']) && is_array($_POST['prod'])){ 
				foreach($_POST['prod'] as $id => $qtd){
						updateCart($id, $qtd);
				}
			}
		} 
		header('location: carrinhocelular.php');
	}

	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);
	


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />

</head>

<body>

	<div class="container">
		<div class="card mt-5">
			 <div class="card-body">
	    		<h4 class="card-title">Carrinho</h4>
	    		<a class="btn btn-outline-dark" href="celular.php">Lista de Produtos</a>
	    	</div>
		</div>

		<?php if($resultsCarts) : ?>
			<form action="carrinhocelular.php?acao=up" method="post">
			<table class="table table-strip">
				<thead>
					<tr>
						<th>Produto</th>
						<th>Quantidade</th>
						<th>Preço</th>
						<th>Subtotal</th>
						
						<th>Ação</th>
						


					</tr>				
				</thead>
				<tbody>
				  <?php foreach($resultsCarts as $result) : ?>
					<tr>
						
						<td><?php echo $result['name']?></td>
						<td>
							<input type="text" name="prod[<?php echo $result['id']?>]" value="<?php echo $result['quantidade']?>" size="1" />
														
							
							</td>

						<td>R$<?php echo number_format($result['preco'], 2, ',', '.')?></td>
						<td>R$<?php echo number_format($result['subtotal'], 2, ',', '.')?></td>

						
						
						<td><a href="carrinhocelular.php?acao=del&id=<?php echo $result['id']?>" class="btn btn-outline-danger">Remover</a></td>
						
					</tr> 
				<?php endforeach;?>
				 <tr>
				 	<td colspan="3" class="text-right"><b>Total: </b></td>
				 	<td>R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>
				 	
				 	
				 </tr>



				</tbody>
				
			</table>

			<a class="btn btn-outline-dark" href="celular.php">Continuar Comprando</a>
			<button class="btn btn-outline-dark" type="submit">Atualizar carrinho</button>

			</form>
	<?php endif?>
		
	</div>
	
</body>
</html>