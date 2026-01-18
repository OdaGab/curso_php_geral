<?php
// closedir.php
// Este script demonstra o uso da função closedir() em PHP.
// Ele abre um diretório, lê seu conteúdo e depois fecha o diretório.
// Substitua 'testdir' pelo caminho do diretório que você deseja abrir.
// Certifique-se de que o diretório existe antes de executar este script.
// Exemplo de uso: php closedir.php




$dir = 'testdir';
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        echo "Conteúdo do diretório '$dir':<br>";
        while (($file = readdir($dh)) !== false) {
            echo " - $file<br>";
        }
        closedir($dh);
    } else {
        echo "Não foi possível abrir o diretório '$dir'.";
    }
} else {
    echo "O caminho '$dir' não é um diretório.";
}
?>
             