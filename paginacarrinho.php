  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Video Aula sobre Carrinho de Compras</title>
    </head>
 
    <body>
    <?php
          require("conexao2.php");
           
          $sql = "SELECT * FROM produtos";
          $qr = mysql_query($sql) or die(mysql_error());
          while($ln = mysql_fetch_assoc($qr)){
             echo '
<h2>'.$ln['nome'].'</h2>
 
';
             echo 'Preço : R$ '.number_format($ln['preco'], 2, ',', '.').'
';
             echo '<img src="image/'.$ln['imagem'].'" /> 
';
             echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'">Comprar</a>';
             echo '
<hr />
 
';
          }
    ?>
 
    </body>
 
    </html>