<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>
<body>
    <main>
        <?php 
            include"conexao.php";#O include nos permite pegar um arquivo 

            $consulta = "SELECT * FROM autor;";# nesta linha é igual ao MySQL, estamos querer dizer que seleciona tudo da nossa tabela autor
            $resultado = mysqli_query($ligacao, $consulta);#aui esta estamos a fazer a cosulta dentro dessa tabela autor

            #organizar e apresentar dados
            
            while($registro = mysqli_fetch_assoc($resultado)){
                echo $registro['autor'];
            }


            echo"<br>Nao encontramos nenhum dados na tabela";        
        ?>
    </main>
    
</body>
</html>