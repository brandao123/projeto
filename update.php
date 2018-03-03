<?php 
include 'conexao.php';

$id = $_POST['id'];
$status = $_POST['status'];

$sql = "UPDATE pedidos SET status='$status' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	header("location: updatestatus.php");

	# code...
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();



















 ?>