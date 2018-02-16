<?php 
include "conexao.php";

$cpf = $_POST['cpf'];


$nome = $_POST['nome'];

 
$email = $_POST['email'];


$senha = $_POST['senha'];




 



$sql = "INSERT INTO cliente (cpf, nome, email, senha) VALUES('$cpf', '$nome', '$email', '$senha')";

if ($conn-> query ($sql) === TRUE) {
	echo "Cliente Cadastrado com sucesso";
	# code...
}
else{
	header("location: form.php");
	echo "Error:" . $sql . "<br/>" . $conn -> error;
}

$conn->close();




 ?>