<?php 
include'head.php';
 ?>
<body>
	
		
	<form method="post" action="update.php">
	<hr/>
		<h5>Atualização de Status</h5>	
		<input type="text" name="id" placeholder="Digite o id" required/><br/><hr/>
		<input type="text" name="atualizar" placeholder="Digite a atualização" required/><br/><hr/>
		<button class="btn btn-outline-dark my-2 my-sm-0">Atualizar</button><br/>

		
		
	</form>

</body>


<?php 
include 'footer.php';
 ?>