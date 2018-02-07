<?php 
include "conexao.php";

$nome = $_POST['nome'];

 
$email = $_POST['email'];


$senha = $_POST['senha'];




 



$sql = "INSERT INTO usuario (nome, email, senha) VALUES('$nome', '$email', '$senha')";

if ($conn-> query ($sql) === TRUE) {
	echo "Usuario inserido com sucesso";
	# code...
}
else{
	echo "Error:" . $sql . "<br/>" . $conn -> error;
}

$conn->close();




 ?>