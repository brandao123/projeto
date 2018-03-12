<?php 
include "conexao.php";



$nome = $_POST['nome'];

$categoria = $_POST['categoria'];

$preco = $_POST['preco'];

$descricao = $_POST['descricao'];

$foto = $_POST['foto'];




$sql = "INSERT INTO celular (nome, categoria, preco, descricao, foto) VALUES('$nome', '$categoria', '$preco', '$descricao', '$foto')";

if ($conn-> query ($sql) === TRUE) {
	header("location: celular.php");
	# code...
}
else{
	echo "Error:" . $sql . "<br/>" . $conn -> error;
}

$conn->close();




 ?>