 <?php 

include "conexao.php";
 


$nome = $_POST['nome'];


$descricao = $_POST['descricao'];


$foto = $_POST['foto'];


$sql = "SELECT nome, descricao, foto FROM produto";
$result = $conn -> query($sql);
if ($result->num_rows>0) {
	
}
else{
	header("location: celular.php");
	echo "0 resultados";

}
$conn -> close();



?>