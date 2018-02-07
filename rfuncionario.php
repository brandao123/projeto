<?php 
include 'head.php';
 ?>

<body>
	<form>
		<hr>
		<h5>CADASTRAR FUNCIONARIO</h5>
	<form method="post" action="insert.php">
		<input type="text" name="nome" placeholder="Digite o nome"/>
		<input type="text" name="email" placeholder="Digite o email"/>
		
		<input type="text" name="senha" placeholder="Digite a senha"/>
		
		<button class="btn btn-outline-dark my-2 my-sm-0">CADASTRAR</button>

	</form>

</body>


<?php 
include 'footer.php';
 ?>
