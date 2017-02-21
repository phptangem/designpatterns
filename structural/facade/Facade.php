<?php

namespace DesignPatterns\Structural\Facade;

class Facade{
	protected $os;
	protected $bios;
	public function __construct(BiosInterface $bios, OsInterface $os){
		$this->bios = $bios;
		$this->os = $os;
	}
	public function turnOn(){
		$this->bios->execute();
		$this->bios->waitForKeyPress();
		$this->bios->lanuch();
	}
	public function turnOff(){
		$this->os->halt();
		$this->bios->powerDown();
	}
}