<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber dados</title>
</head>
<body>
    <main>
        <?php 
            include"formConexao.php"; //chama o formulário de
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $email = $_POST["email"];
            $sehna = $_POST["senha"];

            $insert = "INSERT INTO candidatos VALUES(default, '$nome', $idade,'$email','$sehna')";
            mysqli_query($conexao, $insert);
            

        
        ?>

        <button><a href="formulario.html"></a></button>
    </main>
    
</body>
</html>