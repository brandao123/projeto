<?php 
include 'head.php';
 ?>

<body>
	
		
	<form method="post" action="insertfuncionario.php">
		<hr>
		<h5>Cadastre-se</h5>
		<input type="text" name="nome" placeholder="Digite o nome"/><br/><hr/>
		<input type="number" name="cpf" placeholder="Digite o cpf"/><br/><hr/>
		
		<input type="number" name="idade" placeholder="Digite a idade"/><br/><hr/>
		
		<button type="submit" class="btn btn-outline-dark my-2 my-sm-0">CADASTRAR</button><br/>

	</form>

</body>


<?php 
include 'footer.php';
 ?>
