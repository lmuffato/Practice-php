<?php

/* CONFIGURANDO A DATA DO SERVIDOR */
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
// LC_ALL: Mudar todas as configurações locais

print(strftime("%A %B").".\n"); // retorna sábado janeiro.
// Pela configuração da função %A retorna o dia da semana e %B o mês

print(ucwords(strftime("%A %B").".\n")); // retorna Sábado Janeiro.
// ucwords coloca em letras inidiais em mauísculas

?>