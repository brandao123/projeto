<?php 
include 'conexao.php';


$id = $_POST['id'];

$sql = "DELETE FROM notebook WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	header ("location: notebook.php");

	# code...
}
else{
	echo "Erro: ". $conn-> error;
}

$conn->close();



















 ?>