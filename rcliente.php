<?php 
include 'head.php';
 ?>

<body>
	
		
	<form method="post" action="insert.php">
	<hr/>
		<h5>CADASTRAR CLIENTE</h5>	
		<input type="text" name="nome" placeholder="Digite o nome" required/>
		<input type="text" name="cpf" placeholder="Digite o cpf" required/>
		<input type="text" name="email" placeholder="Digite o email" required/>
		
		<input type="password" name="senha" placeholder="Digite a senha" required/>
		
		<button class="btn btn-outline-dark my-2 my-sm-0">CADASTRAR</button>

	</form>

</body>


<?php 
include 'footer.php';
 ?>
