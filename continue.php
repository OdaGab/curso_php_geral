<?php
   
    // Exemplo de continue em PHP
    // Usando continue dentro de um loop for
    for ($i = 1; $i <= 10; $i++) {
        // Se o número for par, pula para a próxima iteração
        if ($i % 2 == 0) {
            continue;
        }
        echo "Número ímpar: " . $i . "\n";
    }

    // Usando continue dentro de um loop foreach
    $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    foreach ($numeros as $numero) {
        // Se o número for maior que 5, pula para a próxima iteração
        if ($numero > 5) {
            continue;
        }
        echo "Número menor ou igual a 5: " . $numero . "\n";
    }

    // Exercícios
    // Teste em outros senários
    $letras = array("a", "b", "c", "d", "e", "f", "g");
    foreach ($letras as $letra) {
        // Se a letra for 'd', pula para a próxima iteração
        if ($letra == "d") {
            continue;
        }
        echo "Letra: " . $letra . "\n";
    }   
?>