<?php 
include "conexao.php";




$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$foto = $_POST['foto'];

 



 



$sql = "INSERT INTO produto (nome, descricao, foto) VALUES('$nome', '$descricao', '$foto')";

if ($conn-> query ($sql) === TRUE) {
	header("location:form.php");
	# code...
}
else{
	echo "Error:" . $sql . "<br/>" . $conn -> error;
}

$conn->close();




 ?>