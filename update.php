<?php 
include 'conexao.php';

$senha = $_POST['senha'];
$id = $_POST['id'];

$sql = "UPDATE usuario SET senha='$senha' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	echo "Atualizado";

	# code...
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();



















 ?>