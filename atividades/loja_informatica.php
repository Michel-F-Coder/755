<?php

require_once "../conexao1.php";

$sql = "CREATE TABLE IF NOT EXISTS categorias (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL)";

$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS produtos ( 
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    categoria_id INT,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL,
    estoque_minimo INT NOT NULL,

FOREIGN KEY (categoria_id) REFERENCES categorias(id))";

$pdo->exec($sql);

$sql = "CREATE TABLE IF NOT EXISTS vendas(
    id INT PRIMARY KEY AUTO_INCREMENT,
    produto_id INT,
    quantidade INT NOT NULL,
    valor_total DECIMAL(10,2) NOT NULL,
    data_venda DATETIME NOT NULL,
    
    FOREIGN KEY (produto_id) REFERENCES produtos(id))";


$pdo->exec($sql);





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> SISTEMA DE CONTROLE DE VENDAS E ESTOQUE </h1>
    h2>
    <?php
    if ($produtoEditar) {
        echo "Editar Produto";
    } else {
        echo "Cadastrar Produto";
    }
    ?>
    </h2>

    <form method="POST">
        <?php if ($produtoEditar) { ?>
            <input type="hidden" name="id" value="<?= $produtoEditar['id'] ?>">
        <?php } ?>
        <label>Nome do Produto:</label>
        <input type="text" name="nome" value="<?= $produtoEditar['nome'] ?? '' ?>">
        <br><br>
        <label>Preço:</label>
        <input type="number" name="preco" step="0.01" min="0" required value="<?=
                                                                                $produtoEditar['preco'] ?? '' ?>">
        <br><br>
        <label>Quantidade:</label>
        <input type="number" name="quantidade" min="0" required value="<?=
                                                                        $produtoEditar['quantidade'] ?? '' ?>">
        <br><br>
        <?php if ($produtoEditar) { ?>
            <button type="submit" name="atualizar">Atualizar Produto</button>
        <?php } else { ?>
            <button type="submit" name="cadastrar">Cadastrar Produto</button>
        <?php } ?>
    </form>

</body>

</html>