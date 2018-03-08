<?php 
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$foto = $_POST['foto'];

$sql = "UPDATE celular SET nome='$nome', categoria='$categoria', preco='$preco', descricao='$descricao', foto='$foto' WHERE id=$id";
echo $sql;
if ($conn->query($sql) === TRUE) {
	//header("location: celular.php");

	# code...
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();

 ?>