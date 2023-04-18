<?php
trait Location {
    private $via;
    private $city;

    /**
     * Get the value of via
     */
    public function getVia()
    {
        return $this->via;
    }

    /**
     * Set the value of via
     */
    public function setVia($via): self
    {
        if (!empty($via)){
        $this->via = $via;

        return $this;
        } else {
            throw new Exception('indirizzo non disponibile');
        }
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     */
    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }
}