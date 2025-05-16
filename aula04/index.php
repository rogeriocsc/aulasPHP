<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Operadores Aritméticos</title>
</head>
<body>
    <?php 
        $a = 20;
        $b = 4;
        // Adição
        $soma = $a + $b; // Resultado: 24
        // Subtração
        $subtracao = $a - $b; // Resultado: 16
        // Multiplicação
        $multiplicacao = $a * $b; // Resultado: 80
        // Divisão
        $divisao = $a / $b; // Resultado: 5
        // Módulo
        $modulo = $a % $b; // Resultado: 0
        // Exponenciação
        $potencia = $a ** $b; // Resultado: 160000
        echo "Soma = " . $soma . "<br>";
        echo " Subtração = " . $subtracao . "<br>";
        echo "Multiplicação = " . $multiplicacao . "<br>";
        echo " Divisão = " . $divisao . "<br>";
        echo " Módulo = " . $modulo . "<br>";
        echo " Exponenciação = " . $potencia . "<br>"; 
    ?>
</body>
</html>