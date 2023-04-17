<?php

class Prodotto
{
    protected $tipo;
    public $nome;
    public $img;
    public $animale;
    public $prezzo;

    public function __construct($_nome, $_img, $_animale, $_prezzo)
    {
        $this->nome = $_nome;
        $this->img = $_img;
        $this->animale = $_animale;
        $this->prezzo = $_prezzo;
    }
};