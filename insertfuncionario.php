<?php 
include "conexao.php";

$nome = $_POST['nome'];

 
$cpf = $_POST['cpf'];


$idade = $_POST['idade'];




 



$sql = "INSERT INTO fucionario (nome, cpf, idade) VALUES('$nome', '$cpf', '$idade')";

if ($conn-> query ($sql) === TRUE) {
	header("location:form.php");
	# code...
}
else{
	echo "Error:" . $sql . "<br/>" . $conn -> error;
}

$conn->close();




 ?>