<?php 
include'head.php';
 ?>

<?php 

  require_once "functions/productlivro.php";
  $pdoConnection = require_once "connection.php";
  $livros = getlivros($pdoConnection); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Carrinho de Compras</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />

</head>

<body>

  <div class="container">
  <hr>
    <div class="row">
      <?php foreach($livros as $livro) : ?>
        <div class="col-4">
          <div class="card">
            <div class="card-body">
            
             <img src="produtos/<?php echo $livro['foto']?>">
               <h4 class="card-title"><?php echo $livro['nome']?></h4>
               <h6 class="card-subtitle mb-2 text-muted">
                  R$<?php 
                  echo number_format($livro['preco'], 2, ',', '.') 
                  ?>
               </h6>

               <a class="btn btn-primary" href="carrinholivro.php?acao=add&id=<?php echo $livro['id']?>" class="card-link">Comprar</a>
            </div>
          </div>
        </div>

      <?php endforeach;?>
    </div>
  </div>
  
</body>
</html>