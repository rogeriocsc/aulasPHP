<?php 
    // IF - ELSE

    $nota1 = 8;
    $nota2 = 7;
    $media = ($nota1 + $nota2) / 2;
    if ($media >= 7) {
        echo "Média: ".$media." <br> Situação: Aluno APROVADO!";
    } elseif ($media >= 5 & $media < 7) {
        echo "Média: ".$media." <br> Situação: Aluno em RECUPERAÇÃO!";
    } else {
        echo "Média: ".$media." <br> Situação: Aluno REPROVADO!";
    }
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP 03 Estrutura Condicional IF ELSE</title>
</head>
<body>
    <h2>Estrutura Condicional IF ELSE</h2>
</body>
</html>