<?php

    // Exemplo de codigo switch em PHP
    $diaDaSemana = date("N"); // Obtém o dia da semana como um número (1-7) 
    $nomeDoDia = "";
    switch ($diaDaSemana) {
        case 1:
            $nomeDoDia = "Segunda-feira";
            break;
        case 2:
            $nomeDoDia = "Terça-feira";
            break;
        case 3:
            $nomeDoDia = "Quarta-feira";
            break;
        case 4:
            $nomeDoDia = "Quinta-feira";
            break;
        case 5:
            $nomeDoDia = "Sexta-feira";
            break;
        case 6:
            $nomeDoDia = "Sábado";
            break;
        case 7:
            $nomeDoDia = "Domingo";
            break;
        default:
            $nomeDoDia = "Dia inválido";
            break;
    }
    echo "Hoje é: " . $nomeDoDia;
?>

// Teste em outros senários 