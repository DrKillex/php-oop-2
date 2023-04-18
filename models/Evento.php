<?php
require_once __DIR__.'/../traits/Location.php';
class Evento{
    use Location;
    private $data;


    public function __construct($_via, $_city, $_data)
    {
        $this->setVia($_via);
        $this->setCity($_city);
        $this->setData($_data);

    }


    /**
     * Get the value of data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     */
    public function setData($data): self
    {   
        $this->data = $data;

        return $this;
    }
}