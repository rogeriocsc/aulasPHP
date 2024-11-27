<?php 
    // Variaveis

    $nome = "Mauricio";
    $numeroA = 20;
    $numeroB = 10.54;
    echo "Nome: $nome<br/>";
    echo "Número A: $numeroA<br/>";
    echo "Número B: $numeroB<br/>";
    
    // Constantes

    define("nome","Mauricio");
    define("num1", 10);
    define("num2", 15.4);
    echo "Constante - Nome: ".nome."<br>";
    echo "Constante - Número1 = ".num1."<br>";
    echo "Constante - Número2 = ".num2."<br>";

    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 PHP</title>
</head>
<body>
        <h2>Variáveis e Constantes</h2>
        <p>Variáveis podem ser alteradas no algoritmo</p>
        <p>Constantes não podem ser alteradas no algoritmo</p>
        <p>Para concatenar em php utiliza o operador de concatenação ponto ( . ) </p>
        <hr>
</body>
</html>