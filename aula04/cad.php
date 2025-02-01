<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h2>Resultado</h2>
    </header>
    <main>
        <div class="resultado">
            <?php 
                // var_dump($_REQUEST); Similar ao get ou post
                $nome = $_GET["nome"] ?? "Sem Nome";
                $sobrenome = $_GET["sobrenome"] ?? "Desconhecido";  
                echo "<p> É um prazer te conhecer, <strong> $nome $sobrenome 
                </strong> Este é meu site";    
            ?>
            <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
        </div>
    </main>
</body>
</html>

<!-- $_GET[] variável super global -->
<!-- https://www.php.net/manual/pt_BR/migration70.new-features.php
O operador de coalescência nula (??) foi adicionado como um truque sintático para o caso trivial de precisar usar um ternário em conjunto com a função isset(). Ele retorna o primeiro operando se este existir e não for null; caso contrário retorna o segundo operando.
Só existe do php 7 para cima -->