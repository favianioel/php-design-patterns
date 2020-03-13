<?php

interface CarService {
    public function getCost();
}

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 19;
    }
}

class OilChange implements CarService
{
    public function getCost()
    {
        return 29;
    }
}