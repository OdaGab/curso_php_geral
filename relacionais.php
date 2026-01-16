<?php

   // codigo PHP

   // Codigo para demonstrar operadores relacionais em PHP  

    /*
    O que este código demonstra:
    Operadores Relacionais: Uso de ==, ===, !=, !==, <, >, <=, >= para comparar valores.
    Tipagem Estrita: Diferença entre igualdade de valor e igualdade de tipo.
    Saída Formatada: Uso de echo para exibir resultados das comparações.
  
    */  
    $x = 10;          // Inteiro
    $y = "10";       // String
    $z = 20;         // Inteiro
    $w = 5;          // Inteiro
    echo "--- Operadores Relacionais em PHP ---\n";

    // Igualdade de valor
    $igualValor = ($x == $y); 
    
    // true, pois os valores são iguais
    echo "x == y: " . ($igualValor ? "true" : "false") . "\n";
   
    // Igualdade de valor e tipo
    $igualTipo = ($x === $y); // false, pois os tipos são diferentes
    echo "x === y: " . ($igualTipo ? "true" : "false") . "\n";
   
    // Diferença de valor
    $diferenteValor = ($x != $z); // true, pois 10 é diferente de 20
    echo "x != z: " . ($diferenteValor ? "true" : "false") . "\n";
   
    // Diferença de valor e tipo
    $diferenteTipo = ($x !== $y); // true, pois os tipos são diferentes
    echo "x !== y: " . ($diferenteTipo ? "true" : "false") . "\n";
   
    // Menor que
    $menorQue = ($w < $x); // true, pois 5 é menor que 10
    echo "w < x: " . ($menorQue ? "true" : "false") . "\n";
   
    // Maior que
    $maiorQue = ($z > $x); // true, pois 20 é maior que 10
    echo "z > x: " . ($maiorQue ? "true" : "false") . "\n";
   
    // Menor ou igual a
    $menorIgual = ($x <= $y); // true, pois 10 é igual a 10
    echo "x <= y: " . ($menorIgual ? "true" : "false") . "\n";
  
    // Maior ou igual a
    $maiorIgual = ($z >= $w); // true, pois 20 é maior que 5
    echo "z >= w: " . ($maiorIgual ? "true" : "false") . "\n";
    echo "Fim do script.\n";    
    
?>