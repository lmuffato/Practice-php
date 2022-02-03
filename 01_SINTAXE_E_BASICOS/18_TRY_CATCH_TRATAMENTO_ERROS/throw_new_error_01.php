<?php

/* TRATAMENTO DE ERROS

O tratamento de erros evita que a aplicação trave caso algum processo
tenha problemas, além de facilitar a descoberta do que ocasionou o erro.

*/

function verifica($valor) {
  try {                                                         // Tenta executar 
    if ($valor === 1) {
      throw new Exception("O Valor não pode ser igual a 1");    // Lança um error especificando a mensagem
    }
  } catch (Exception $error) {                                  // Captura o erro no catch
      echo 'Exceção capturada: ',  $error->getMessage(), "\n";  // Ação do catch (nesse caso, imprime o erro no console)
    }
    finally {                                                   // O finaly é uma ação que será executada no final da função, independente se cair no try ou catch
      echo "Finaliza o script"."\n";
    }
}

// verifica(1);

/* Mesmo que a função "tratamentoDeError" faça o tratametno pelo try/catch
a função "verifica" já fez o tratamento no seu método.
Por isso o erro é tratado pela fução "verifica" e não pela função "tratamentoDeError".
*/

function tratamentoDeError() {
  try {
    verifica(1);
  }
  catch (Exception $error) {
    echo 'A exceção aqui é: ',  $error->getMessage(), "\n";
  }

}

tratamentoDeError();

?>