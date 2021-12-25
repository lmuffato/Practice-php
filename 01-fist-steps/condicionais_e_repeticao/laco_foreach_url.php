<!-- Este codígo precisa ser executado no servidor ou na extensão PHP Server -->

<form>
  <input type="text" name="nome">
  <input type="date" name="nascimento">
  <input type="submit" value="OK">
</form>

<?php

/* FOREACH BUSCANDO VALORES DE FORMULÁRIO NA URL */
if (isset($_GET)) {                   // Busca o array de parâmtros que existe na url, apenas se existirem (isset)
  foreach ($_GET as $key => $value) { // No array $_GET, para cada chave $key, recebe o valor correspondente.
    echo ("Nome do campo: ".$key."<br>");
    echo ("Valor do campo: ".$value."<br>");
    echo ("<br>");
  }
}

?>