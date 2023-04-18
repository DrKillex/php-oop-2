<?php
require_once __DIR__.'/../traits/Location.php';
class Negozio{
    use Location;
    private $orari;
    private $numeroTelefono;

    public function __construct($_via, $_city, $_orari, $_numeroTelefono)
    {
        $this->via = $this->setVia($_via);
        $this->city = $this->setCity($_city);
        $this->orari = $this->setOrari($_orari);
        $this->numeroTelefono = $this->setNumeroTelefono($_numeroTelefono);
    }

    /**
     * Get the value of orari
     */
    public function getOrari()
    {
        return $this->orari;
    }

    /**
     * Set the value of orari
     */
    public function setOrari($orari): self
    {
        $this->orari = $orari;

        return $this;
    }

    /**
     * Get the value of numeroTelefono
     */
    public function getNumeroTelefono()
    {
        return $this->numeroTelefono;
    }

    /**
     * Set the value of numeroTelefono
     */
    public function setNumeroTelefono($numeroTelefono): self
    {
        $this->numeroTelefono = $numeroTelefono;

        return $this;
    }
}