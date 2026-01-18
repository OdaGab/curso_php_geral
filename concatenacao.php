<?php
  // concatenacao.php
    // Este script demonstra a concatenação de strings em PHP.
    // Declaração de variáveis do tipo String
    $primeiroNome = "Odair";
    $ultimoNome = "Silva";
    // Concatenando as strings usando o operador de concatenação (.)
    $nomeCompleto = $primeiroNome . " " . $ultimoNome;
    // Exibindo o nome completo
    echo "Nome Completo: " . $nomeCompleto . "\n";
?>  <?php
    // Exercício adicional: Concatenar mais strings
    $saudacao = "Olá";
    $mensagem = "bem-vindo ao mundo do PHP!";
    $fraseCompleta = $saudacao . ", " . $primeiroNome . "! " . $mensagem;
    echo $fraseCompleta . "\n";
?><?php
    // Teste em outros cenários de concatenação
    // Concatenar números como strings
    $numero1 = "10";
    $numero2 = "20";                
    $somaString = $numero1 . $numero2; // Isso resultará em "1020"
    echo "Concatenando números como strings: " . $somaString . "\n";
    // Concatenar strings com variáveis
    $cidade = "São Paulo";
    $estado = "SP";
    $localizacao = $cidade . ", " . $estado;
    echo "Localização: " . $localizacao . "\n";
?><?php
    // Concatenar strings com quebras de linha e tabulações
    $linha1 = "Primeira linha.";
    $linha2 = "Segunda linha.";
    $textoFormatado = $linha1 . "\n" . $linha2 . "\n";
    echo "Texto Formatado:\n" . $textoFormatado;
    $coluna1 = "Coluna 1";;
    $coluna2 = "Coluna 2";
    $textoTabulado = $coluna1 . "\t" . $coluna2;
    echo "Texto Tabulado:\n" . $textoTabulado . "\n";
?>