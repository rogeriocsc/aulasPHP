<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - Estruturas de Repetição</title>
</head>
<body>
    <?php 
        // Estrutura While
        $contador = 0;
        while ($contador <= 10) {
            echo "Contador While: $contador<br>";
            $contador ++;
        }

        // Estrutura For
        for ($i = 0; $i <= 20; $i++) { 
            echo "Contador For: $i<br>";
        }

        // Estrutura Do While
        $A = 0;
        do {
            echo "Contador Do While: $A<br>";
            $A ++;
        } while ($A <= 10);

        // Estrutura Foreach
        $cores = ["vermelho", "verde", "azul"];
        foreach ($cores as $cor) {
            echo "Cor: $cor<br>";
        }
    ?>
</body>
</html>