<?php

$nombre = "Odair";
$apellido = "Gabriel";

echo "Nombre: $nombre, Apellido: $apellido";

?>
<?php   
    // Manipulação de Strings em PHP

    // Declaração de variáveis do tipo String
    $frase = "Olá, bem-vindo ao mundo do PHP!";
    
    // Exibindo a string original
    echo "Frase Original: " . $frase . "\n";

    // Convertendo para maiúsculas
    $fraseMaiuscula = strtoupper($frase);
    echo "Frase em Maiúsculas: " . $fraseMaiuscula . "\n";

    // Convertendo para minúsculas
    $fraseMinuscula = strtolower($frase);
    echo "Frase em Minúsculas: " . $fraseMinuscula . "\n";

    // Obtendo o comprimento da string
    $comprimento = strlen($frase);
    echo "Comprimento da Frase: " . $comprimento . " caracteres\n";

    // Substituindo uma palavra na string
    $fraseSubstituida = str_replace("PHP", "programação", $frase);
    echo "Frase com Substituição: " . $fraseSubstituida . "\n";

    // Dividindo a string em um array de palavras
    $palavras = explode(" ", $frase);
    echo "Palavras na Frase:\n";
    foreach ($palavras as $palavra) {
        echo "- " . $palavra . "\n";
    }
?>  
<?php
    // Exercícios
    // Teste em outros senários
    // String com uma aspas simples
    $stringAspasSimples = 'Isso é uma string com uma \'aspas simples\' dentro dela.';
    echo $stringAspasSimples . "\n";
    // String com uma aspas dupla
    $stringAspasDuplas = "Isso é uma string com uma \"aspas dupla\" dentro dela.";
    echo $stringAspasDuplas . "\n";
    // String com quebra de linha
    $stringQuebraLinha = "Primeira linha.\nSegunda linha.";
    echo $stringQuebraLinha . "\n";
    // String com tabulação
    $stringTabulacao = "Coluna 1\tColuna 2\tColuna 3.";
    echo $stringTabulacao . "\n";
?> 