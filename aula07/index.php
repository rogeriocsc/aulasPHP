<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Estrutura IF, ELSEIF e ELSE</title>
</head>
<body>
    <?php 
        $nota = 8.0;
        if ($nota >= 9.0) {
        echo "Nota A";
        } elseif ($nota >= 8.0) {
        echo "Nota B";
        } elseif ($nota >= 7.0) {
        echo "Nota C";
        } else {
        echo "Nota D";
        }  
        // Estrutura IF, ELSEIF e ELSE 
    ?>
</body>
</html>