<?php 
include'head.php';
 ?>

<?php 

  require_once "functions/productnotebook.php";
  $pdoConnection = require_once "connection.php";
  $notebooks = getnotebooks($pdoConnection);
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
      <?php foreach($notebooks as $notebook) : ?>
        <div class="col-4">
          <div class="card">
            <div class="card-body">
            
             <img src="produtos/<?php echo $notebook['foto']?>">
               <h4 class="card-title"><?php echo $notebook['nome']?></h4>
               <h6 class="card-subtitle mb-2 text-muted">
                  R$<?php 
                  echo number_format($notebook['preco'], 2, ',', '.') 
                  ?>
               </h6>

            </div>
          </div>
        </div>

      <?php endforeach;?>
    </div>
  </div>
  
</body>
</html>