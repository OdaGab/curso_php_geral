<?php 

    // Exemplo utilizando unlink em PHP
    // Removendo um arquivo
    // utilizanção do unlink para deletar o arquivo arquivo_renomeado.txt


    $arquivo = "arquivo_renomeado.txt";
    if (file_exists($arquivo)) {
        if (unlink($arquivo)) {
            echo "Arquivo removido com sucesso.\n";
        } else {
            echo "Erro ao remover o arquivo.\n";
        }
    } else {
        echo "Arquivo não encontrado.\n";
    }

    // Lembre-se voce estara removendo o arquivo arquivo_renomeado.txt
    // que foi renomeado no exemplo anterior    
    

?>  
