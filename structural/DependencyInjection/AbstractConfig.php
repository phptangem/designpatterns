<?php 
namespace DesignPatterns\Structural\DependencyInjection;

abstract class AbstractConfig
{
	protected $storage;
	public function __construct($storage){
		$this->storage = $storage;
	}
}