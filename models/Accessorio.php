<?php
require_once __DIR__.'/prodotto.php';
class Accessorio  extends Prodotto
{
    public $materiale;
    public $dimensioni;
    public function __construct($_nome, $_img, $_animale, $_prezzo, $_materiale, $_dimensioni)
    {
        parent::__construct($_nome, $_img, $_animale, $_prezzo);
        $this->materiale = $_materiale;
        $this->dimensioni = $_dimensioni;
        $this->tipo = 'accessorio';
    }
};