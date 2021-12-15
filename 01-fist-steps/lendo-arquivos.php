<?php

$conteudoDoArquivo = fopen('arquivo-exemplo.php', r);
#$conteudoDoArquivo = 'fopen("arquivo-exemplo.txt", r)';

print($conteudoDoArquivo);
?>