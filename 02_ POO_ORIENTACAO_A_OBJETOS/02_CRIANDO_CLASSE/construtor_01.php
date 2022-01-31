<?php
class Point {
    public int $x;
    private int $y;
    protected int $z;

    public function __construct(int $x, int $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }
}

// Passagem de ambos os argumentos.
$p1 = new Point(4, 5);

/* ACESSANDO O ATRIBUTO PÚBLICO */
var_dump($p1->x);
// Passar somente o argumento obrigatório, $y terá o valor padrão zero.


?>