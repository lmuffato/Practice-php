<?php

/*
O PHP introduz um conceito de destrutor similar ao de outras linguagens
orientadas a objeto, como C++. O método destrutor será chamado assim que
todas as referências a um objeto particular forem removidas ou quando o
objeto for explicitamente destruído ou qualquer ordem na sequência de encerramento.
*/

class MyDestructableClass
{
    function __construct() {
        print "In constructor\n";
    }

    function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }
}

$obj = new MyDestructableClass();