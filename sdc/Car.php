<?php

class Car implements DriveInterface
{
    private $brand;
    private $model;
    private $price;
    private $hp;

    public function __construct($brand, $model, $price, $hp)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->hp = $hp;
    }

    public function getBrand() 
    {
        return $this->brand;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getHp()
    {
        return $this->hp;
    }

    public function drive($location)
    {
        return "This Car ($this->brand $this->model) drives in $location !";
    }
}