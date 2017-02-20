<?php
abstruct class Multiton{
	private static $instances = array();
	public static function getInstance(){
		$key = get_called_class().serialize(func_get_args());
		if(! isset(self::$instances[$key])){
			$rc = new ReflectionClass(get_called_class());
			self::$instances[$key] = $rc->newInstanceArgs(func_get_args());
		}
		return self::$instances[$key];
	}
	/**
     * 防止实例从外部被克隆
     *
     * @return void
     */
	private function __clone()
	{
	}
	/**
     * 防止实例从外部反序列化
     *
     * @return void
     */
	private function __wakeup()
    {
    }
}