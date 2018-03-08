<?php 
include'headerlogin.php';
 ?>


<body>

<div class="d-flex flex-column">
  <div class="p-2">
<form method="post" action="updatecelular.php">
	<hr>
    <h5>Alterar Celular</h5>
		<input type="number" name="id" placeholder="Digite o id"/>
		<input type="text" name="nome" placeholder="Digite o nome"/>
		<input type="text" name="descricao" placeholder="Digite a descrição"/>
		<input type="text" name="preco" placeholder="Digite o preço"/>
		<input type="text" name="categoria" placeholder="Digite a categoria"/>
		<input type="text" name="foto" placeholder="Digite a foto"/>
		<button class="btn btn-outline-dark btn-sm my-2 my-sm-0">Alterar</button>
	</form>

  </div>
 


  <div class="p-2">
<form method="post" action="updatelivro.php">
	<hr>
    <h5>Alterar Livro</h5>
		<input type="number" name="id" placeholder="Digite o id"/>
		<input type="text" name="nome" placeholder="Digite o nome"/>
		<input type="text" name="descricao" placeholder="Digite a descrição"/>
		<input type="text" name="preco" placeholder="Digite o preço"/>
		<input type="text" name="categoria" placeholder="Digite a categoria"/>
		<input type="text" name="foto" placeholder="Digite a foto"/>
		<button class="btn btn-outline-dark btn-sm my-2 my-sm-0">Alterar</button>
	</form>

  </div>
  

  <div class="p-2">
<form method="post" action="updateroupa.php">
	<hr>
    <h5>Alterar Roupa</h5>
		<input type="number" name="id" placeholder="Digite o id"/>
		<input type="text" name="nome" placeholder="Digite o nome"/>
		<input type="text" name="descricao" placeholder="Digite a descrição"/>
		<input type="text" name="preco" placeholder="Digite o preço"/>
		<input type="text" name="categoria" placeholder="Digite a categoria"/>
		<input type="text" name="foto" placeholder="Digite a foto"/>
		<button class="btn btn-outline-dark btn-sm my-2 my-sm-0">Alterar</button>
	</form>


  </div>

  <div class="p-2">
<form method="post" action="updatenotebook.php">
	<hr>
    <h5>Alterar Notebook</h5>
		<input type="number" name="id" placeholder="Digite o id"/>
		<input type="text" name="nome" placeholder="Digite o nome"/>
		<input type="text" name="descricao" placeholder="Digite a descrição"/>
		<input type="text" name="preco" placeholder="Digite o preço"/>
		<input type="text" name="categoria" placeholder="Digite a categoria"/>
		<input type="text" name="foto" placeholder="Digite a foto"/>
		<button class="btn btn-outline-dark btn-sm my-2 my-sm-0">Alterar</button>
	</form>

  </div>
  

  <div class="p-2">
<form method="post" action="updatejogo.php">
	<hr>
    <h5>Alterar Jogo</h5>
		<input type="number" name="id" placeholder="Digite o id"/>
		<input type="text" name="nome" placeholder="Digite o nome"/>
		<input type="text" name="descricao" placeholder="Digite a descrição"/>
		<input type="text" name="preco" placeholder="Digite o preço"/>
		<input type="text" name="categoria" placeholder="Digite a categoria"/>
		<input type="text" name="foto" placeholder="Digite a foto"/>
		<button class="btn btn-outline-dark btn-sm my-2 my-sm-0">Alterar</button>
	</form>

  </div>

  <div class="p-2">
<form method="post" action="updateinformatica.php">
	<hr>
    <h5>Alterar Informática</h5>
		<input type="number" name="id" placeholder="Digite o id"/>
		<input type="text" name="nome" placeholder="Digite o nome"/>
		<input type="text" name="descricao" placeholder="Digite a descrição"/>
		<input type="text" name="preco" placeholder="Digite o preço"/>
		<input type="text" name="categoria" placeholder="Digite a categoria"/>
		<input type="text" name="foto" placeholder="Digite a foto"/>
		<button class="btn btn-outline-dark btn-sm my-2 my-sm-0">Alterar</button>
	</form>



  </div>
</div>

</body>

<?php
include 'footer.php';
?>	