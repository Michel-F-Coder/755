<?php

//caminho arquivo json
$arquivo = __DIR__."/dados/teste.json";

// 1. Ler arquivo json
$conteudo = file_get_contents($arquivo);

// 2. Transformar o json em array php
$alunos = json_decode($conteudo, true);

// 3. Percorrer todos os alunos

foreach($alunos as $aluno) {

    // 4. Procurar o aluno com nome "Maria
    if ($aluno["nome"] == "Maria") {

        // 5. Alterar dado
        $aluno["idade"] = 15;
    }
}

// 6. Transofmrar ARRAY PHP em JSON novamente//
$json = json_encode($alunos,
JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

// 7. Salvar no arquivo
file_put_contents($arquivo, $json);

echo "Aluno atualizado";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>