<?php
$target_dir = "produtos/";
$target_file = $target_dir . basename($_FILES["arquivo"]["name"]);

if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $target_file)){
	echo "O arquivo" . basename($_FILES["arquivo"]["name"]) . "foi enviado.";
}
else{
	echo "Ops, ocorreu um erro ao enviar.";
}


?>
