<?php
require_once __DIR__.'/prodotto.php';
class Gioco extends Prodotto
{
    public $caratteristiche;
    public $dimensioni;
    public function __construct($_nome, $_img, $_animale, $_prezzo, $_caratteristiche, $_dimensioni)
    {
        parent::__construct($_nome, $_img, $_animale, $_prezzo);
        $this->caratteristiche = $_caratteristiche;
        $this->dimensioni = $_dimensioni;
        $this->tipo = 'gioco';
    }
};