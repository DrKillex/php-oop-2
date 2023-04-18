<?php
trait Dimensioni {
    public $dimensioni;

    /**
     * Get the value of dimensioni
     */
    public function getDimensioni()
    {
        return $this->dimensioni;
    }

    /**
     * Set the value of dimensioni
     */
    public function setDimensioni($dimensioni): self
    {
        $this->dimensioni = $dimensioni;

        return $this;
    }
};