<?php

namespace DesignPatterns\Creational\FactoryMethod;
class ItalianFactory extends FactoryMethod{
	protected function createVehicle($type){
		switch ($type) {
			case parent::CHEAP:
				return new Bicyle();
				break;
			case parent::FAST:
				return new Ferrari();
				break;
			default:
				throw new \InvalidArgumentException("$type is not a valid vehicle");
				break;
		}
	}
}