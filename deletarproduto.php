<?php 
include'headerlogin.php';
 ?>

 <body>
<div class="d-flex flex-column">
  <div class="p-2">
<form method="post" action="deletecelular.php">
	<hr>
	<h5>Deletar Celular</h5>
		<input type="text" name="id" placeholder="Digite o id do celular" required/>
		<button class="btn btn-outline-dark btn-sm my-2 my-sm-0">Deletar</button>
	</form>

  </div>
 


  <div class="p-2">
<form method="post" action="deleteinformatica.php">
	<hr>
	<h5>Deletar Informática</h5>
		<input type="text" name="id" placeholder="Digite o id da informatica" required/>
		<button class="btn btn-outline-dark btn-sm my-2 my-sm-0">Deletar</button>
	</form>

  </div>
  

  <div class="p-2">
<form method="post" action="deletenotebook.php">
	<hr>
	<h5>Deletar Notebook</h5>
		<input type="text" name="id" placeholder="Digite o id do notebook" required/>
		<button class="btn btn-outline-dark btn-sm my-2 my-sm-0">Deletar</button>
	</form>


  </div>

  <div class="p-2">
<form method="post" action="deletejogo.php">
	<hr>
	<h5>Deletar Jogo</h5>
		<input type="text" name="id" placeholder="Digite o id do jogo" required/>
		<button class="btn btn-outline-dark btn-sm my-2 my-sm-0">Deletar</button>
	</form>

  </div>
  

  <div class="p-2">
<form method="post" action="deletelivro.php">
	<hr>
	<h5>Deletar Livro</h5>
		<input type="text" name="id" placeholder="Digite o id do livro" required/>
		<button class="btn btn-outline-dark btn-sm my-2 my-sm-0">Deletar</button>
	</form>

  </div>

  <div class="p-2">
<form method="post" action="deleteroupa.php">
	<hr>
	<h5>Deletar Roupa</h5>
		<input type="text" name="id" placeholder="Digite o id da roupa" required/>
		<button class="btn btn-outline-dark btn-sm my-2 my-sm-0">Deletar</button>
	</form>



  </div>
</div>
 	
	


 
	


 
	


 
	

 
	


 
	


</body>
		






<?php 
include 'footer.php';
 ?>