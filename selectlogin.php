<?php
session_start();
include "conexao.php";

$email = $_POST['email'];


$senha = $_POST['senha'];


$sql = "SELECT*FROM cliente WHERE email='$email' AND senha='$senha'";
$result = $conn->query($sql);

if ($result-> num_rows > 0){
	$_SESSION['logado'] = 1;
	echo "Logado";
	// output data of each row
	while($row = $result->fetch_assoc()){

	}
}

else{
	echo "Email ou senha incorretos!";
	header("location: logincliente.php"); 
	
}

$conn -> close();

?>