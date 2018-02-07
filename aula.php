<?php 

include "conexao.php";
 


$email = $_POST['email'];


$senha = $_POST['senha'];


$sql = "SELECT*FROM usuario WHERE email=$email AND senha=$senha";
$result = $conn -> query($sql);
if ($result->num_rows>0) {



	while ($row = $result -> fetch_assoc()) {
		echo $row['nome']."<br/>";
		# code...
	}
	# code...
}
else{
	echo "0 resultados";

}
$conn -> close();



?>