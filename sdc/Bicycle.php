<?php

class Bicycle implements DriveInterface
{
    private $brand;
    private $model;
    private $price;
    private $warranty;

    public function __construct($brand, $model, $price, $warranty)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->warranty = $warranty;
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
    public function getWarranty()
    {
        return $this->warranty;
    }

    public function drive($location)
    {
        return "This Bicycle ($this->brand $this->model) drives in $location !";
    }
}