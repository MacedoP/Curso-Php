<?php
    
    $servidor = "localhost";
    $usuario = "root";
    $senha= "";
    $basedados = "livraria";

    $ligacao = mysqli_connect($servidor, $usuario, $senha);
    mysqli_select_db($ligacao, $basedados);
    $erroConect = mysqli_connect($servidor, $usuario, $senha) or die('Falha na conexao com a base de dados! ');

?>