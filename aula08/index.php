<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08 Estrutura SWITCH/CASE</title>
</head>
<body>
    <?php 
        $operacao = 'A';
        switch ($operacao) {
            case 'A':
                echo "Soma = X + Y";
                break;
            case 'B':
                echo "Subtração = X - Y";
                break;
            case 'C':
                echo "Multiplicação = X * Y";
                break;
            case 'D':
                echo "Divisão = X / Y";
                break;
            default:
                echo "Operação Inválida!";
                break;
                // Estrutura SWITCH/CASE
        }
    ?>
</body>
</html>