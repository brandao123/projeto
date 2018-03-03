<?php 
session_start();
include "conexao.php";
 


$email = $_POST['email'];


$senha = $_POST['senha'];


$sql = "SELECT*FROM cliente WHERE email='$email' AND senha='$senha'";
$result = $conn -> query($sql);
if ($result->num_rows>0) {
	header("location: form.php");
}
else{
	header("location: rcliente.php");
	echo "0 resultados";

}
$conn -> close();



?>