<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Variáveis, echo e concatenação</title>
</head>
<body>
    <?php 
        // Variáveis
        $nome = "João";
        $idade = 25;
        $altura = 1.75;
        echo "Olá, meu nome é " . $nome . "<br>";
        echo " Minha idade é " . $idade . "<br>";
        echo " Minha altura é " . $altura . "<br>";
        echo $nome . " Idade: " . $idade . " Altura: " . $altura . "<br>"; 

        // Constantes
        define("nome","Mauricio");
        echo "Constante - Nome: ".nome."<br>";
    ?>
</body>
</html>