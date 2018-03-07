<?php 
include 'conexao.php';


$id = $_POST['id'];

$sql = "DELETE FROM informatica WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	header ("location: informatica.php");

	# code...
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();



















 ?>