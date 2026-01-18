<?php
    // Exemplo chdir em PHP
    // Alterando o diretório de trabalho atual
    $diretorio = "novo_diretorio";

    // Muda o diretório de trabalho atual
    if (chdir($diretorio)) {
        // Se o diretório for alterado com sucesso, exibe uma mensagem
        $diretorio = "novo_diretorio";
        echo "Diretório alterado para: $diretorio\n";
    } else {
        echo "Erro ao alterar o diretório para: $diretorio\n";
    }
?>

