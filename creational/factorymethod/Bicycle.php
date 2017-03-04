<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Bicycle implements VehicleInterface
{
	protected $color;
	public function setColor($rgb){
        $this->color = $rgb;
    }
    
}