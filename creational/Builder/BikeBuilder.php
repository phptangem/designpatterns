<?php 
namespace DesignPatterns\Creational\Builder;

class BikeBuilder implements BuilderInterface{
	protected $bike;

	public function createVehicle(){
		$this->bike = new Parts\Bike();
	}

	public function addDoors(){
		
	}

	public function addWheels(){
		$this->bike->setPart('forwardWheel', new Parts\wheel());
		$this->bike->setPart('realWheel', new Parts\wheel());
	}

	public function addEngine(){
		$this->bike->setPart('engine', new Parts\Engine());
	}

	public function getVehicle(){
		return $this->bike;
	}
}