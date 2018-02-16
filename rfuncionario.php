<?php 
include 'head.php';
 ?>

<body>
	
		
	<form method="post" action="insertfuncionario.php">
		<hr>
		<h5>CADASTRAR FUNCIONARIO</h5>
		<input type="text" name="nome" placeholder="Digite o nome"/>
		<input type="number" name="cpf" placeholder="Digite o cpf"/>
		
		<input type="number" name="idade" placeholder="Digite a idade"/>
		
		<button type="submit" class="btn btn-outline-dark my-2 my-sm-0">CADASTRAR</button>

	</form>

</body>


<?php 
include 'footer.php';
 ?>
