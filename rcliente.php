<?php 
include 'head.php';
 ?>

<body>
	
		
	<form method="post" action="insert.php">
	<hr/>
		<h5>Cadastre-se</h5>	
		<input type="text" name="nome" placeholder="Digite o nome" required/><br/><hr/>
		<input type="text" name="cpf" placeholder="Digite o cpf" required/><br/><hr/>
		<input type="text" name="email" placeholder="Digite o email" required/><br/><hr/>
		
		<input type="password" name="senha" placeholder="Digite a senha" required/><br/><hr/>
		<input type="text" name="foto" placeholder="Digite a foto" required/><br/><hr/>
		
		<button class="btn btn-outline-dark my-2 my-sm-0">CADASTRAR</button><br/>

	</form>

</body>


<?php 
include 'footer.php';
 ?>
