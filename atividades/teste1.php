<?php
//caminho arquivo json
$arquivo = __DIR__."/dados/teste.json";

// 1. Ler arquivo json
$conteudo = file_get_contents($arquivo);

// 2. Transformar o json em array php
$alunos = json_decode($conteudo, true);

// 3. Percorrer todos os alunos
foreach($alunos as $posicao => $aluno) {

    // 4. Procurar o aluno com NOME: "Maria"
    if($aluno["nome"] == "Maria") {

        // 5. Excluir aluno
        unset($alunos[$posicao]);

    }
}

// 6. Reorganizar as posições do ARRAY
$alunos = array_values($alunos);

// 7. Transformar ARRAY PHP em JSON novamente
$json = json_encode($alunos,
JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

// 8. Salvar no arquivo
file_put_contents($arquivo, $json);

echo "Aluno excluido";





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