<?php 
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$foto = $_POST['foto'];

$sql = "UPDATE informatica SET nome='$nome', categoria='$categoria', preco='$preco', descricao='$descricao', foto='$foto' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	header("location: informatica.php");

	# code...
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();

 ?>