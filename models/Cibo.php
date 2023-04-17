<?php
require_once __DIR__.'/prodotto.php';
class Cibo extends Prodotto
{
    public $peso;
    public $ingredienti;
    public function __construct($_nome, $_img, $_animale, $_prezzo, $_peso, array $_ingredienti)
    {
        parent::__construct($_nome, $_img, $_animale, $_prezzo);
        $this->peso = $_peso;
        $this->ingredienti = $_ingredienti;
        $this->tipo = 'cibo';
    }
};