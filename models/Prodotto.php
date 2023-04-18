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

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     */
    public function setImg($img): self
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of animale
     */
    public function getAnimale()
    {
        return $this->animale;
    }

    /**
     * Set the value of animale
     */
    public function setAnimale($animale): self
    {
        $this->animale = $animale;

        return $this;
    }

    /**
     * Get the value of prezzo
     */
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set the value of prezzo
     */
    public function setPrezzo($prezzo): self
    {
        $this->prezzo = $prezzo;

        return $this;
    }
};