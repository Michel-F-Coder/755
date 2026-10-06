<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $categoria = $_POST["categoria"];
    $marca = $_POST["marca"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    $nome_fab = $_POST["nome do fabricante"];
    $pais_fab = $_POST["pais do fabricante"];

    $novoProduto = [

        "nome" => $nome,
        "categoria" => $categoria,
        "marca" => $marca,
        "preco" => $preco,
        "quantidade" => $quantidade,

        "p_info" => [
            "nome_fabricante" => $nome_fab,
            "pais_fabricante" => $pais_fab,
        ]
    ];

    $conteudoJson = file_get_contents(__DIR__ . "/dados/produtos.json");

    $produtos = json_decode($conteudoJson, true);

    $produtos[] = $novoProduto;

    $jsonAtualizado = json_encode(
        $produtos,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    file_put_contents(__DIR__ . "/dados/produtos.json", $jsonAtualizado);

    $conteudoJson = file_get_contents(__DIR__ . "/dados/intro.json");

    $produtos = json_decode($conteudoJson, true);
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUTOS</title>
</head>

<body>
    <h1>CADASTRO DE PRODUTOS</h1>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br><br>
        <label>categoria:</label>
        <input type="text" name="categoria" required>
        <br>
        <label>marca:</label>
        <input type="text" name="marca" required>
        <br>
        <label>preco:</label>
        <input type="number" name="preco" required>
        <br>
        <label>quantidade:</label>
        <input type="number" name="quantidade" required>
        <br>
        <h2>Dados do Fabricante</h2>
        <label>Nome:</label>
        <input type="text" name="nome do fabricante" required>
        <br>
        <label>Pais fabricante:</label>
        <input type="text" name="pais do fabricante" required>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <h1>PRODUTOS CADASTRADOS</h1>

    <?php foreach ($produtos as $produto) { ?>
        <h2> <?= $produto["nome"] ?> </h2>
        <p> Idade: <?= $produto["idade"] ?> </p>

        <!-- PORTUGUES -->
        <h2>PORTUGUÊS</h2>
        <p>Prova 1: <?= $aluno["notas"]["portugues"]["prova1"] ?></p>
        <p>Prova 2: <?= $aluno["notas"]["portugues"]["prova2"] ?></p>
        <p>Prova 3: <?= $aluno["notas"]["portugues"]["prova3"] ?></p>






    <?php } ?>











</body>

</html>