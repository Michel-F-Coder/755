<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
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
        <form method="POST">
            <label>Nome:</label>
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

