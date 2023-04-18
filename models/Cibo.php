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

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     */
    public function setPeso($peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of ingredienti
     */
    public function getIngredienti()
    {
        return $this->ingredienti;
    }

    /**
     * Set the value of ingredienti
     */
    public function setIngredienti($ingredienti): self
    {
        $this->ingredienti = $ingredienti;

        return $this;
    }
};