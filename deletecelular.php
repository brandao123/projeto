<?php 
include 'conexao.php';


$id = $_POST['id'];

$sql = "DELETE FROM celular WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	header ("location: celular.php");

	# code...
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();



















 ?>