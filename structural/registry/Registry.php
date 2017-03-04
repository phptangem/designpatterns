<?php

namespace DesignPatterns\Structural\Registry;
abstract class Registry{
	const LOGGER = 'logger';

	protected static $storedValues = array();

	public static function set($key, $value){
		self::$storedValues[$key] = $value;
	}

	public static function get($key){
		return self::$storedValues[$key];
	}
}