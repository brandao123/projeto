 <?php 

include "conexao.php";
 


$nome = $_POST['nome'];


$cpf = $_POST['cpf'];


$sql = "SELECT*FROM fucionario WHERE nome='$nome' AND cpf='$cpf'";
$result = $conn -> query($sql);

if ($result->num_rows>0) {

header("location: form.php");


}
else{
	echo "Error";
	

}
$conn -> close();



?>