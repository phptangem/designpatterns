<?php
namespace DesignPatterns\More\Delegation;

class TeamLead{
	protected $slave;

	public function __construct(JuniorDeveloper $junior){
		$this->slave = $junior;
	}
	public function writeCode(){
		$this->slave->writeBadCode();
	}
}