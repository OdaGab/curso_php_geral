<?php

// Exemplo de uso de file_put_contents() para escrever dados em um arquivo

$dados = "Olá, Mundo!";
file_put_contents("exemplo.txt", $dados);

// Exemplo de uso de file_put_contents() com flags
file_put_contents("exemplo.txt", $dados, FILE_APPEND | LOCK_EX);

// Exemplo de uso de file_put_contents() com um contexto de stream
$contexto = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => http_build_query(['key' => 'value'])
    ]
]);
file_put_contents("exemplo.txt", $dados, 0, $contexto);

?>