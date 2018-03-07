<?php 
include 'conexao.php';


$id = $_POST['id'];

$sql = "DELETE FROM jogo WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	header ("location: jogo.php");

	# code...
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();



















 ?>