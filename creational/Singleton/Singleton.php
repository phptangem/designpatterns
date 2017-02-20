<?php

namespace DesignPatterns\Creational\Singleton;

class Singleton{
	private static $instance;
	//通过延迟加载获取实例
	public static function getInstance(){
		if(static::$instance === null){
			static::$instance = new Static;
		}
		return static::$instance;
	}
	//构造函数私有化，不允许在外部访问
	private function __construct(){

	}
	//克隆函数私有化,防止被克隆
	private function __clone(){

	}
	//反序列化函数私有化,防止被反序列化产生多个实例
	private function __wakeup(){

	}
}