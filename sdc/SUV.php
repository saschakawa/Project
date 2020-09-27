<?php

class SUV extends Car
{
    private $luggaespace;

    public function __construct($brand, $model, $price, $hp, $luggaespace)
    {
        parent::__construct($brand, $model, $price, $hp);
        $this->luggaespace = $luggaespace;
    }

    public function getLuggageSpace()
    {
        return $this->luggaespace;
    }

    public function drive($location)
    {
        return parent::drive($location);
    }
}