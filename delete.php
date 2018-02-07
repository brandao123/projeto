<?php 
include 'conexao.php';


$id = $_POST['id'];

$sql = "DELETE FROM usuario WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	echo "Usuario Deletado";

	# code...
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();



















 ?>