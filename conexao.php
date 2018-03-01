<?php 
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

//cria a conexao
$conn = new mysqli($servername, $username, $password, $dbname);

//checa a conexão
if ($conn -> connect_error) {
	die("connection failed:".$conn-> connect_error);
	# code...
}
 