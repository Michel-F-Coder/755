<?php

$arquivo = __DIR__ . "/dados/produtos.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $categoria = $_POST["categoria"];
    $marca = $_POST["marca"];
    $preco = $_POST["preco"];
    $quantidade = $_POST["quantidade"];

    $nome_fab = $_POST["nome_fabricante"];
    $pais_fab = $_POST["pais_fabricante"];

    $novoProduto = [
        "nome" => $nome,
        "categoria" => $categoria,
        "marca" => $marca,
        "preco" => $preco,
        "quantidade" => $quantidade,

        "p_info" => [
            "nome_fabricante" => $nome_fab,
            "pais_fabricante" => $pais_fab
        ]
    ];

    $conteudoJson = file_get_contents($arquivo);

    $produtos = json_decode($conteudoJson, true);

    if (!is_array($produtos)) {
        $produtos = [];
    }

    $produtos[] = $novoProduto;

    $jsonAtualizado = json_encode(
        $produtos,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    );

    file_put_contents($arquivo, $jsonAtualizado);
    
} else {

    $conteudoJson = file_get_contents($arquivo);
    $produtos = json_decode($conteudoJson, true);

    if (!is_array($produtos)) {
        $produtos = [];
    }
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

        <label>Categoria:</label>
        <input type="text" name="categoria" required>
        <br><br>

        <label>Marca:</label>
        <input type="text" name="marca" required>
        <br><br>

        <label>Preço:</label>
        <input type="number" name="preco" required>
        <br><br>

        <label>Quantidade:</label>
        <input type="number" name="quantidade" required>
        <br><br>

        <h2>Dados do Fabricante</h2>

        <label>Nome:</label>
        <input type="text" name="nome_fabricante" required>
        <br><br>

        <label>País fabricante:</label>
        <input type="text" name="pais_fabricante" required>
        <br><br>

        <button type="submit">Enviar</button>

    </form>

    <h1>PRODUTOS CADASTRADOS</h1>

    <?php foreach ($produtos as $produto) { ?>

        <h2><?= $produto["nome"] ?></h2>

        <p>Categoria: <?= $produto["categoria"] ?></p>

        <p>Marca: <?= $produto["marca"] ?></p>

        <p>Preço: R$ <?= $produto["preco"] ?></p>

        <p>Quantidade: <?= $produto["quantidade"] ?></p>

        <h2>Fabricante</h2>

        <p>
            Nome do fabricante:
            <?= $produto["p_info"]["nome_fabricante"] ?>
        </p>

        <p>
            País do fabricante:
            <?= $produto["p_info"]["pais_fabricante"] ?>
        </p>

        <hr>

    <?php } ?>

</body>

</html>
