<?php
abstruct class Multiton{
	private static $instances = array();
	public static function getInstance(){
		$key = get_called_class().serialize(func_get_args());
	}
}