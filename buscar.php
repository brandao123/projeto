<html>
	<head>
		<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width">
	 

<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="estilo/estilo.css">
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

	<script src="js/bootstrap.min.js"></script>
	</head>



	<body>
<div class="container-fluid superior ">
	
	<div class="container">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

<!-- Image and text -->
<nav class="navbar navbar-light bg-light">

  <a class="navbar-brand" href="#">

    <img src="icones.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
    VERMELHO.COM
  </a>

   <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Digite sua pesquisa" aria-label="Search" name="nome" >
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Procurar</button>
    </form>

</nav>
<img src="vermelho.jpg" width="1000" height="200" >





	</body>
</html>

<?php
$nome = $_POST['nome'];
echo "Nome: $nome";
$idade = $_POST['idade'];
echo "<br/>Idade: $idade";
$doenca = $_POST['doenca'];
echo "<br/>Doença: $doenca";




?>
