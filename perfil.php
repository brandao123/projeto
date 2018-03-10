<?php 
include'headerlogin.php';



 ?>




  <body>



<section>
<hr>
<div class="container">
<div class="row">    


<?php
include "conexao.php";

$sql = "SELECT * FROM cliente";
$result = $conn->query($sql);

if($row = $result->fetch_assoc()){
 
    // echo "<img class='card-img-top'src=".$row['foto']."alt='Card image cap'>";
    
    echo "<div class='col-sm'>";
    echo "<div class='card' style='width: 18rem'>";

   echo "<img class='card-img-top' src='foto/".$row['foto']."'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title'>".$row['nome']."</h5>";
    echo "<p class='card-text'> ".$row['email']." </p>";
    echo " <a href='form.php' class='btn btn-outline-dark'>Voltar</a>";
    echo " <a href='pedidos.php' class='btn btn-outline-dark'>Pedidos</a>";
   
    echo "</div>";
    echo"</div>";
    echo"</div>";


  
  
}
else{
  echo "0 resultados";
}
$conn->close();
?>


   </div>

  </div>
</section>
  </body>
<?php 
include 'footer.php';
 ?>