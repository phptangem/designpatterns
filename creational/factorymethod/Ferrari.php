<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Ferrari implements VehicleInterface
{
	protected $color;
	public function setColor($rgb){
        $this->color = $rgb;
    }
    
}