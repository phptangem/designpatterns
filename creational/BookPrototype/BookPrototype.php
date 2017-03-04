<?php

namespace DesignPatterns\Creational\Prototype;
abstract class BookPrototype{
	protected $title;
	protected $category;
	abstract public function __clone();
	public function getTitle(){
		return $this->title;
	}
	public function setTitle($title){
		$this->title = $title;
	}
}