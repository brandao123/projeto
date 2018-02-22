<?php 
include'head.php';



 ?>




	<body>



<section>
<div class="container">
<div class="row">    


<?php
include "conexao.php";

$sql = "SELECT * FROM produto";
$result = $conn->query($sql);

if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    // echo $row['nome']." - R$ ".$row['preco']." - ". $row['abrangencia']."<br/>";
   


 

    echo ";<div class='col-sm'>";
     echo "; <div class='card' style='width: 18rem;'>";
  echo ";<img class='card-img-top' src='produtos/".$row['foto']."alt='Card image cap'>";
  echo ";<div class='card-body'>";
    echo ";<h5 class='card-title'>".$row['nome']."</h5>";
    echo ";<p class='card-text'> ".$row['descricao']." </p>";
    echo " ;<a href='#' class='btn btn-outline-dark'>Pesquisar</a>";
  echo "</div>";
echo"</div>";
   echo"</div>";


  
  }
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