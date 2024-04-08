<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAmos fazer o nosso Primeiro Exemplo usando Versionamento com git e github</title>
    <link rel="stylesheet" href="./stilos/stilo-geral.css">
</head>
<body>
    <main>
        <?php
           
           
          

            function notaFinal($s){
                $notas = func_get_args();
                $qn = func_num_args();
                $media =0;
                for($i =0; $i < $notas;$i++){
                    $media += $notas[$i];
                }
                return $media;
                

            }
            $aluno = array(4.3,5.7,2.1,6.7);
            echo notaFinal($aluno) ;

        ?>
    </main>
    
</body>
</html>