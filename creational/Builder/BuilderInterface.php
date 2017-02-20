<?php

namespace DesignPatterns\Creational\Builder;

interface BuilderInterface{
	public function createVehicle();
	public function addDoors();
	public function addWheels();
	public function addEngine();
	public function getVehicle();
}