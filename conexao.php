<?php

// host = 'local host' -> roda na maquina 
// host = '194.61.238.119' roda na VPS

$host = 'localhost';
$db = 'michel755';
$user = 'michel755';
$pass = '755!@#';

$charset = 'utf8mb4';

try {
    $pdo = new PDO("mysql:host = $host; dbname=$db; charset=$charset", $user, $pass);
    
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    echo "CONECTADO COM SUCESSO!!";

}

catch (PDOException $e) {
    echo "ERRO AO CONECTAR NO BANCO DE DADOS:\n";
    echo $e->getMessage(); // retorna erro do sistema
}
