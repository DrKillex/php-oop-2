<?php
require_once __DIR__.'/../traits/Dimensioni.php';
require_once __DIR__.'/prodotto.php';
class Accessorio  extends Prodotto
{
    use Dimensioni;
    public $materiale;
    public function __construct($_nome, $_img, $_animale, $_prezzo, $_materiale, $_dimensioni)
    {
        parent::__construct($_nome, $_img, $_animale, $_prezzo);
        $this->materiale = $_materiale;
        $this->dimensioni = $_dimensioni;
        $this->tipo = 'accessorio';
    }

    /**
     * Get the value of materiale
     */
    public function getMateriale()
    {
        return $this->materiale;
    }

    /**
     * Set the value of materiale
     */
    public function setMateriale($materiale): self
    {
        $this->materiale = $materiale;

        return $this;
    }
};