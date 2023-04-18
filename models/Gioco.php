<?php
require_once __DIR__.'/../traits/Dimensioni.php';
require_once __DIR__.'/prodotto.php';
class Gioco extends Prodotto
{
    use Dimensioni;
    public $caratteristiche;
    public function __construct($_nome, $_img, $_animale, $_prezzo, $_caratteristiche, $_dimensioni)
    {
        parent::__construct($_nome, $_img, $_animale, $_prezzo);
        $this->caratteristiche = $_caratteristiche;
        $this->dimensioni = $_dimensioni;
        $this->tipo = 'gioco';
    }
};