<?php

interface DriveInterface
{
    public function drive($location);
    public function getBrand();
    public function getModel();
    public function getPrice();
}