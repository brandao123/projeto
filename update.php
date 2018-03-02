<?php 
include 'conexao.php';

$status = $_POST['status'];
$id = $_POST['id'];

$sql = "UPDATE pedido SET status='$status' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	echo "Atualizado";

	# code...
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();



















 ?>