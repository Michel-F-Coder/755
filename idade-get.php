<?php

$nome = $_GET["nome"];
$idade = $_GET["idade"];
$resultado;

if($idade >= 18) {
    $resultado = "De maior";
}
else {
    $resultado = "De menor";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="idade.css">
</head>
<body>
    
<header>
        <nav>
            <a href="index.php">inicio </a>
            <a hrep="cadastro.html">CADASTROS </a>
        </nav>
    </header>
</body>
<main>
    <section class="Cadastro">
        <h1>cadastro</h1>
        <form method="GET">
            <label class = "cor_do_nome">Nome:</label>
            <input type="text" class ="nome" id ="nome" name = "nome">

            <label>IDADE:</label>
            <input type="number" class = "idade" id = "idade" name = "idade">
            <button type="submit"> Cadastrar</button>

        </form>
        <p> <?= $resultado ?></p>
    </section>
</main>

</body>
</html>

