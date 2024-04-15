<?php 
    $servidor = "localhost";
    $user = "root";
    $senha  = "";
    $banco_de_dados = "candidatos";
    $conexao = mysqli_connect($servidor, $user, $senha);
    mysqli_select_db($conexao,$banco_de_dados);


?>