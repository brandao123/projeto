<?php 
include 'head.php';
 ?>

<body>
	
		
	<form method="post" action="insert.php">
	<hr/>
		<h5>CADASTRAR CLIENTE</h5>	
		<input type="text" name="nome" placeholder="Digite o nome"/>
		<input type="text" name="cpf" placeholder="Digite o cpf"/>
		<input type="text" name="email" placeholder="Digite o email"/>
		
		<input type="password" name="senha" placeholder="Digite a senha"/>
		
		<button class="btn btn-outline-dark my-2 my-sm-0">CADASTRAR</button>

	</form>

</body>


<?php 
include 'footer.php';
 ?>