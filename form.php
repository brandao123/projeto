<?php 
include'head.php';



 ?>




  <body>



<section>
<hr>
<div class="container">
<div class="row">    


<?php
include "conexao.php";

$sql = "SELECT * FROM promocao";
$result = $conn->query($sql);

if($result->num_rows>0){
  while($row = $result->fetch_assoc()){
    // echo "<img class='card-img-top'src=".$row['foto']."alt='Card image cap'>";
    
    echo "<div class='col-sm'>";
    echo "<div class='card' style='width: 18rem'>";

   echo "<img src='fotoform/".$row['foto']."'>";
    echo "<div class='card-body'>";
   
   
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