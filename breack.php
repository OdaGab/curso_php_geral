<?php

  // Exemplo de break em PHP
  // Usando break dentro de um loop for
  for ($i = 1; $i <= 10; $i++) {
      // Se o número for maior que 5, sai do loop
      if ($i > 5) {
          break;
      }
      echo "Número: " . $i . "\n";
  }     

    // Usando break dentro de um loop foreach   
    $numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    foreach ($numeros as $numero) {
        // Se o número for maior que 5, sai do loop
        if ($numero > 5) {
            break;
        }
        echo "Número: " . $numero . "\n";
    }   
    // Exercícios
    // Teste em outros senários
    $letras = array("a", "b", "c", "d", "e", "f", "g");
    foreach ($letras as $letra) {
        // Se a letra for 'd', sai do loop
        if ($letra == "d") {
            break;
        }
        echo "Letra: " . $letra . "\n";
    }   
?>