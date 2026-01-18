<?php   

$dir = 'testdir';   
if (is_dir($dir)) {   
    if (rmdir($dir)) {   
        echo "Directorio '$dir' deletado com sucesso.";   
    } else {   
        echo "Falha ao deletar o diretorio '$dir'. diretorio não existe ou não está vazio.";   
    }   
} else {   
    echo "Diretorio '$dir' não existe.";   
} 
?>