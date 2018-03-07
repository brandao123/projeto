<?php 
include 'conexao.php';


$id = $_POST['id'];

$sql = "DELETE FROM livro WHERE id=$id";

if ($conn->query($sql) === TRUE) {
header ("location: livro.php");

	# code...
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();



















 ?>