<?php
namespace DesignPatterns\Creational\AbstractFactory;
abstract class AbstractFactory{
	//创建文本组件
	abstract public function createText($content);
	//创建图片组件
	abstract public function createPicture($path, $name = '');
}