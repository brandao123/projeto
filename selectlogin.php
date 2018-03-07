<?php
session_start();
include "conexao.php";


if (isset ($_POST['email'])) {

    $email = mysqli_real_escape_string ($conn, $_POST['email']);
    $senha = mysqli_real_escape_string ($conn, $_POST ['senha']);

    $sel_user = "select id from cliente where email = '$email' AND senha = '$senha'";
    $run_user = mysqli_query ($conn, $sel_user);
    $row = mysqli_fetch_array($run_user,MYSQLI_ASSOC);
    $active = $row ['active'];

    $check_user = mysqli_num_rows($run_user);

    if ($check_user == 1 )  {

        $_SESSION ['login_user'] = $email;

        header ("location: perfil.php");
    }

    else {

        echo "Email or password is not correct, try again’";

    }


}


?>