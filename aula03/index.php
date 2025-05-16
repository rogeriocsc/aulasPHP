<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - var_dump()</title>
</head>
<body>
    <?php 
        $nome = "Silva";
        $idade = 45;
        $valor = 10.5;
        $a = 10;
        $b = '10';
        $r = $a == $b;
        var_dump($nome);
        var_dump($idade);
        var_dump($valor);
        var_dump($r);
        // var_dump — Despeja na saída informações sobre uma variável
    ?>
</body>
</html>