<?php
namespace DesignPatterns\Creational\StaticFactory;

class StaticFactory{
	public static function factory($type){
		$className = __NAMESPACE__.'\\Car\\'.unfirst($type);
		if(! class_exists($className)){
			throw new \InvalidArgumentException('Missing format class.');;
		}

		return new $className();
	}
}