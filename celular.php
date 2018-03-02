<?php 
include'head.php';
 ?>

<?php 

  require_once "functions/productcelular.php";
  $pdoConnection = require_once "connection.php";
  $celulares = getcelulares($pdoConnection);
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
      <?php foreach($celulares as $celular) : ?>
        <div class="col-4">
          <div class="card">
            <div class="card-body">
            
             <img src="produtos/<?php echo $celular['foto']?>">
               <h4 class="card-title"><?php echo $celular['nome']?></h4>
               <h6 class="card-subtitle mb-2 text-muted">
                  R$<?php 
                  echo number_format($celular['preco'], 2, ',', '.') 
                  ?>
               </h6>

               <a class="btn btn-primary" href="carrinhocelular.php?acao=add&id=<?php echo $celular['id']?>" class="card-link">Comprar</a>
            </div>
          </div>
        </div>

      <?php endforeach;?>
    </div>
  </div>
  
</body>
</html>