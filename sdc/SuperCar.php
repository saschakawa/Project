<?php

class SuperCar extends Car 
{
    private $prestige;

    public function __construct($brand, $model, $price, $hp, $prestige)
    {
        parent::__construct($brand, $model, $price, $hp);
        $this->prestige = $prestige;
    }

    public function getPrestige()
    {
        return $this->prestige;
    }

    public function drive($location)
    {
        return parent::drive($location);
    }
}