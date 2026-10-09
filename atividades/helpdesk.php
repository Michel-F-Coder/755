<?php

require_once "helpdesk-func.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $solicitante = $_POST["solicitante"];
    $setor = $_POST["setor"];
    $problema = $_POST["problema"];
    $prioridade = $_POST["prioridade"];

    $novochamado = [
        "solicitante" => $solicitante,
        "setor" => $setor,
        "problema" => $problema,
        "prioridade" => $prioridade
    ];

    $arquivo = file_get_contents(__DIR__ . "/dados/chamados.json");

    


}





?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAMADOS</title>
</head>

<body>

    <h1>CHAMADOS TI</h1>
    <br>
    <form method="POST">
        <label class="label_solicitante">SOLICITANTE:</label>
        <input type="text" class="input_solicitante" name="solicitante">
        <br><br>
        <label class="label_setor">SETOR:</label>
        <input type="text" class="input_setor" name="setor">
        <br><br>
        <label class="label_problema">PROBLEMA:</label>
        <br>
        <textarea name="problema" rows="5" cols="30" required></textarea>
        <br><br>
        <label class="label_prioridade">PRIORIDADE:</label>
        <select name="prioridade" id="prioridade">
            <option value="baixa">BAIXA</option>
            <option value="media">MEDIA</option>
            <option value="alta">ALTA</option>
        </select>
        <br><br>
        <button type="submit">ENVIAR</button>
    </form>

</body>

</html>