<?php
namespace DesignPatterns\Creational\AbstractFactory;

class HtmlFactory extends AbstractFactory{
	public function createPicture($path, $name = ''){
		return new Html\Picture($path, $name);
	}
	public function crteateText($content){
		return new Html\Text($content);
	}
}